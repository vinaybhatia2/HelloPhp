<html>
  <body>
<script src="https://c.na1.visual.force.com/support/console/28.0/integration.js" type="text/javascript"></script>
    <script type="text/javascript">

        function testGetPrimaryTabIds() {
              sforce.console.getPrimaryTabIds(showTabId);
        }
        
        var showTabId = function showTabId(result) {
            //Display the primary tab IDs
            alert('Primary Tab IDs: ' + result.ids);
            };

        function testRefreshPrimaryTabById(frm) {
            var primaryTabId = frm.tabToRefresh.value;
            sforce.console.refreshPrimaryTabById(primaryTabId, true, refreshSuccess);
        }

        var refreshSuccess = function refreshSuccess(result) {
            //Report whether refreshing the primary tab was successful
            if (result.success == true) {
                alert('Primary tab refreshed successfully');
            } else {
                alert('Primary did not refresh');
            }
        }; 
  </script>

<A HREF="#" onClick="testGetPrimaryTabIds();return false">
         Click here to get the primary tab IDs </A> 
<br>
<form name='frm'>
Tab ID to Refresh: <input type="text" name="tabToRefresh" value="scc-pt-0">
<input type="button" value="Refresh" onClick="testRefreshPrimaryTabById(this.form)"> 
</form>
</body>
</html>

<h2>Instructions</h2>
<p> Please open a ticket <a href="https://github.com/pjaudiomv/upcoming-meetings-bmlt/issues" target="_top">https://github.com/pjaudiomv/upcoming-meetings-bmlt/issues</a> with problems, questions or comments.</p>
<div id="upcoming_meetings_accordion">
    <h3 class="help-accordian"><strong>Basic</strong></h3>
    <div>
        <p>[upcoming_meetings root_server=&quot;https://www.domain.org/main_server&quot; services=&quot;12&quot; timezone="America/New_York]</p>
        <p>Multiple service bodies can be added seperated by a comma like so services=&quot;12,14,15&quot;</p>
        <strong>Attributes:</strong> root_server, services, recursive, grace_period, num_results, display_type, timezone
        <p><strong>Shortcode parameters can be combined.</strong></p>
    </div>
    <h3 class="help-accordian"><strong>Shortcode Attributes</strong></h3>
    <div>
        <p>The following shortcode attributes may be used.</p>
        <p><strong>root_server</strong></p>
        <p><strong>services</strong></p>
        <p><strong>recursive</strong></p>
        <p><strong>grace_period</strong></p>
        <p><strong>num_results</strong></p>
        <p><strong>display_type</strong></p>
        <p><strong>timezone</strong></p>
        <p>A minimum of root_server, services and timezone attribute are required, which would return all towns for that service body seperated by a comma.</p>
        <p>Ex. [upcoming_meetings root_server=&quot;https://www.domain.org/main_server&quot; services=&quot;50&quot; timezone="America/New_York"]</p>
    </div>
    <h3 class="help-accordian"><strong>&nbsp;&nbsp;&nbsp;&nbsp;- root_server</strong></h3>
    <div>
        <p><strong>root_server (required)</strong></p>
        <p>The url to your BMLT root server.</p>
        <p>Ex. [upcoming_meetings root_server=&quot;https://www.domain.org/main_server&quot; services=&quot;50&quot;]</p>
    </div>
    <h3 class="help-accordian"><strong>&nbsp;&nbsp;&nbsp;&nbsp;- services</strong></h3>
    <div>
        <p><strong>services (required)</strong></p>
        <p>The Service Body ID of the service body you would like to include, to add multiple service bodies just seperate by a comma..</p>
        <p>Ex. [upcoming_meetings root_server=&quot;https://www.domain.org/main_server&quot; timezone="America/New_York" services=&quot;50,37,26&quot;]</p>
    </div>
    <h3 class="help-accordian"><strong>&nbsp;&nbsp;&nbsp;&nbsp;- recursive</strong></h3>
    <div>
        <p><strong>recursive</strong></p>
        <p>To recurse service bodies add recursive=&quot;1&quot;. This can be useful when using a Service Body Parent ID</p>
        <p>Ex. [upcoming_meetings root_server=&quot;https://www.domain.org/main_server&quot; services=&quot;50&quot; timezone="America/New_York" recursive=&quot;1&quot;]</p>
    </div>
    <h3 class="help-accordian"><strong>&nbsp;&nbsp;&nbsp;&nbsp;- grace_period</strong></h3>
    <div>
        <p><strong>grace_period</strong></p>
        <p>To add a grace period to meeting lookup add grace_period=&quot;15&quot; this would add a 15 minute grace period.</p>
        <p>Ex. [upcoming_meetings root_server=&quot;https://www.domain.org/main_server&quot; services=&quot;50&quot; timezone="America/New_York" grace_period=&quot;15&quot;]</p>
    </div>
    <h3 class="help-accordian"><strong>&nbsp;&nbsp;&nbsp;&nbsp;- num_results</strong></h3>
    <div>
        <p><strong>num_results</strong></p>
        <p>To limit the number of results add num_results="5" this would limit results to 5.</p>
        <p>Ex. [upcoming_meetings root_server=&quot;https://www.domain.org/main_server&quot; services=&quot;50&quot; state=&quot;1&quot; timezone="America/New_York" num_results=&quot;5&quot;]</p>
    </div>
    <h3 class="help-accordian"><strong>&nbsp;&nbsp;&nbsp;&nbsp;- display_type</strong></h3>
    <div>
        <p><strong>display_type</strong></p>
        <p>To change the display type add display_type="table" there are three different types <strong>simple</strong>, <strong>table</strong>, <strong>block</strong></p>
        <p>Ex. [upcoming_meetings root_server=&quot;https://www.domain.org/main_server&quot; services=&quot;50&quot; timezone="America/New_York" display_type=&quot;table"]</p>
    </div>
    <h3 class="help-accordian"><strong>&nbsp;&nbsp;&nbsp;&nbsp;- timezone</strong></h3>
    <div>
        <p><strong>timezone</strong></p>
        <p>This is required and should be set to what timezones your meetings are in, We can not rely on servers time zone. add timezone="America/New_York" you can set this in the admin setting or short code. A complete list of timezones can be found here http://php.net/manual/en/timezones.php</p>
        <p>Ex. [upcoming_meetings root_server=&quot;https://www.domain.org/main_server&quot; services=&quot;50&quot; timezone="America/New_York" ]</p>
    </div>
</div>

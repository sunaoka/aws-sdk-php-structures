<?php

namespace Sunaoka\Aws\Structures\AbuseSignal;

class AbuseSignalClient extends \Aws\AbuseSignal\AbuseSignalClient
{
    use CreateAbuseReport\CreateAbuseReportTrait;
    use GetAbuseReportStatus\GetAbuseReportStatusTrait;
    use ListAbuseReportStatuses\ListAbuseReportStatusesTrait;
}

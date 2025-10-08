<?php

namespace Sunaoka\Aws\Structures\CloudTrailData;

class CloudTrailDataClient extends \Aws\CloudTrailData\CloudTrailDataClient
{
    use PutAuditEvents\PutAuditEventsTrait;
}

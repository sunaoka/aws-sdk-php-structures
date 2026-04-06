<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeDraftAppVersionResourcesImportStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $appArn
 * @property string $appVersion
 * @property list<Shapes\ErrorDetail>|null $errorDetails
 * @property string|null $errorMessage
 * @property 'Pending'|'InProgress'|'Failed'|'Success' $status
 * @property \Aws\Api\DateTimeResult $statusChangeTime
 */
class DescribeDraftAppVersionResourcesImportStatusResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeAppVersionResourcesResolutionStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $appArn
 * @property string $appVersion
 * @property string|null $errorMessage
 * @property string $resolutionId
 * @property 'Pending'|'InProgress'|'Failed'|'Success' $status
 */
class DescribeAppVersionResourcesResolutionStatusResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $actionId
 * @property Shapes\TargetResource $targetResource
 * @property string $actionDefinitionId
 * @property Shapes\ActionPayload $actionPayload
 * @property \Aws\Api\DateTimeResult $executionTime
 */
class DescribeActionResponse extends Response
{
}

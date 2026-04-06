<?php

namespace Sunaoka\Aws\Structures\QuickSight\GetFlowMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $FlowId
 * @property string $Name
 * @property string|null $Description
 * @property 'PUBLISHED'|'DRAFT'|'PENDING_APPROVAL'|null $PublishState
 * @property int|null $UserCount
 * @property int|null $RunCount
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $RequestId
 * @property int|null $Status
 */
class GetFlowMetadataResponse extends Response
{
}

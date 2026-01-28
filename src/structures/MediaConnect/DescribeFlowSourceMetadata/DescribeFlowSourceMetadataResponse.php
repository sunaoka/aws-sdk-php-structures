<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlowSourceMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FlowArn
 * @property list<Shapes\MessageDetail>|null $Messages
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property Shapes\TransportMediaInfo|null $TransportMediaInfo
 * @property Shapes\NdiSourceMetadataInfo|null $NdiInfo
 */
class DescribeFlowSourceMetadataResponse extends Response
{
}

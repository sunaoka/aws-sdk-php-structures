<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlowSourceMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $FlowArn
 * @property list<Shapes\MessageDetail> $Messages
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property Shapes\TransportMediaInfo $TransportMediaInfo
 */
class DescribeFlowSourceMetadataResponse extends Response
{
}

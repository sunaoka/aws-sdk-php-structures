<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeTopic;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TopicArn
 * @property string|null $TopicName
 * @property int|null $ReplicationFactor
 * @property int|null $PartitionCount
 * @property string|null $Configs
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|null $Status
 */
class DescribeTopicResponse extends Response
{
}

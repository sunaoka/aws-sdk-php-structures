<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $Description
 * @property list<string> $KafkaVersions
 * @property Shapes\ConfigurationRevision $LatestRevision
 * @property string $Name
 * @property 'ACTIVE'|'DELETING'|'DELETE_FAILED' $State
 */
class DescribeConfigurationResponse extends Response
{
}

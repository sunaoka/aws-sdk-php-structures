<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $Description
 * @property list<string>|null $KafkaVersions
 * @property Shapes\ConfigurationRevision|null $LatestRevision
 * @property string|null $Name
 * @property 'ACTIVE'|'DELETING'|'DELETE_FAILED'|null $State
 */
class DescribeConfigurationResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystem;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $StorageSystemArn
 * @property Shapes\DiscoveryServerConfiguration $ServerConfiguration
 * @property 'NetAppONTAP' $SystemType
 * @property list<string> $AgentArns
 * @property string $Name
 * @property string $ErrorMessage
 * @property 'PASS'|'FAIL'|'UNKNOWN' $ConnectivityStatus
 * @property string $CloudWatchLogGroupArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $SecretsManagerArn
 */
class DescribeStorageSystemResponse extends Response
{
}

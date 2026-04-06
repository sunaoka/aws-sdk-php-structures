<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystem;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $StorageSystemArn
 * @property Shapes\DiscoveryServerConfiguration|null $ServerConfiguration
 * @property 'NetAppONTAP'|null $SystemType
 * @property list<string>|null $AgentArns
 * @property string|null $Name
 * @property string|null $ErrorMessage
 * @property 'PASS'|'FAIL'|'UNKNOWN'|null $ConnectivityStatus
 * @property string|null $CloudWatchLogGroupArn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $SecretsManagerArn
 */
class DescribeStorageSystemResponse extends Response
{
}

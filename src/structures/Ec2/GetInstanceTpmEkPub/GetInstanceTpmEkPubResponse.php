<?php

namespace Sunaoka\Aws\Structures\Ec2\GetInstanceTpmEkPub;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $InstanceId
 * @property 'rsa-2048'|'ecc-sec-p384'|null $KeyType
 * @property 'der'|'tpmt'|null $KeyFormat
 * @property string|null $KeyValue
 */
class GetInstanceTpmEkPubResponse extends Response
{
}

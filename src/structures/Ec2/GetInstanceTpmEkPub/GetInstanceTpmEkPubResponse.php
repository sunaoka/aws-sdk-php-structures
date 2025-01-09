<?php

namespace Sunaoka\Aws\Structures\Ec2\GetInstanceTpmEkPub;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $InstanceId
 * @property 'rsa-2048'|'ecc-sec-p384' $KeyType
 * @property 'der'|'tpmt' $KeyFormat
 * @property string $KeyValue
 */
class GetInstanceTpmEkPubResponse extends Response
{
}

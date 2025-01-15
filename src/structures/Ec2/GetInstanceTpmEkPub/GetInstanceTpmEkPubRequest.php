<?php

namespace Sunaoka\Aws\Structures\Ec2\GetInstanceTpmEkPub;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'rsa-2048'|'ecc-sec-p384' $KeyType
 * @property 'der'|'tpmt' $KeyFormat
 * @property bool|null $DryRun
 */
class GetInstanceTpmEkPubRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     KeyType: 'rsa-2048'|'ecc-sec-p384',
     *     KeyFormat: 'der'|'tpmt',
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\S3Outposts\CreateEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostId
 * @property string $SubnetId
 * @property string $SecurityGroupId
 * @property 'Private'|'CustomerOwnedIp' $AccessType
 * @property string $CustomerOwnedIpv4Pool
 */
class CreateEndpointRequest extends Request
{
    /**
     * @param array{
     *     OutpostId: string,
     *     SubnetId: string,
     *     SecurityGroupId: string,
     *     AccessType?: 'Private'|'CustomerOwnedIp',
     *     CustomerOwnedIpv4Pool?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

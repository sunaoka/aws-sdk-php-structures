<?php

namespace Sunaoka\Aws\Structures\S3Outposts\CreateEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostId
 * @property string $SubnetId
 * @property string $SecurityGroupId
 * @property 'Private'|'CustomerOwnedIp'|null $AccessType
 * @property string|null $CustomerOwnedIpv4Pool
 */
class CreateEndpointRequest extends Request
{
    /**
     * @param array{
     *     OutpostId: string,
     *     SubnetId: string,
     *     SecurityGroupId: string,
     *     AccessType?: 'Private'|'CustomerOwnedIp'|null,
     *     CustomerOwnedIpv4Pool?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

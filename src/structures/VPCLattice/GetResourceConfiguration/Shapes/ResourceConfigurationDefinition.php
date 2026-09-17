<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetResourceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DnsResource|null $dnsResource
 * @property IpResource|null $ipResource
 * @property ArnResource|null $arnResource
 * @property CidrResource|null $cidrResource
 */
class ResourceConfigurationDefinition extends Shape
{
    /**
     * @param array{
     *     dnsResource?: DnsResource|null,
     *     ipResource?: IpResource|null,
     *     arnResource?: ArnResource|null,
     *     cidrResource?: CidrResource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

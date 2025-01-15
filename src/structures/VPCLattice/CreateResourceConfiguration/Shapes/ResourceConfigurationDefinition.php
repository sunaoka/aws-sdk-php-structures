<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateResourceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArnResource|null $arnResource
 * @property DnsResource|null $dnsResource
 * @property IpResource|null $ipResource
 */
class ResourceConfigurationDefinition extends Shape
{
    /**
     * @param array{
     *     arnResource?: ArnResource|null,
     *     dnsResource?: DnsResource|null,
     *     ipResource?: IpResource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateResourceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArnResource $arnResource
 * @property DnsResource $dnsResource
 * @property IpResource $ipResource
 */
class ResourceConfigurationDefinition extends Shape
{
    /**
     * @param array{
     *     arnResource?: ArnResource,
     *     dnsResource?: DnsResource,
     *     ipResource?: IpResource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

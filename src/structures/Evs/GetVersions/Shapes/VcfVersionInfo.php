<?php

namespace Sunaoka\Aws\Structures\Evs\GetVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VCF-5.2.1'|'VCF-5.2.2'|'SELF_DEPLOYED' $vcfVersion
 * @property string $status
 * @property string $defaultEsxVersion
 * @property list<'i4i.metal'|'i7i.metal-24xl'> $instanceTypes
 */
class VcfVersionInfo extends Shape
{
    /**
     * @param array{
     *     vcfVersion: 'VCF-5.2.1'|'VCF-5.2.2'|'SELF_DEPLOYED',
     *     status: string,
     *     defaultEsxVersion: string,
     *     instanceTypes: list<'i4i.metal'|'i7i.metal-24xl'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

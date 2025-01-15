<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSpotPlacementScores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac'>|null $ArchitectureTypes
 * @property list<'hvm'|'paravirtual'>|null $VirtualizationTypes
 * @property InstanceRequirementsRequest|null $InstanceRequirements
 */
class InstanceRequirementsWithMetadataRequest extends Shape
{
    /**
     * @param array{
     *     ArchitectureTypes?: list<'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac'>|null,
     *     VirtualizationTypes?: list<'hvm'|'paravirtual'>|null,
     *     InstanceRequirements?: InstanceRequirementsRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

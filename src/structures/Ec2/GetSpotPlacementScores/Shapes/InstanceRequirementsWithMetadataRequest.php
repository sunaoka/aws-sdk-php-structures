<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSpotPlacementScores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac'> $ArchitectureTypes
 * @property list<'hvm'|'paravirtual'> $VirtualizationTypes
 * @property InstanceRequirementsRequest $InstanceRequirements
 */
class InstanceRequirementsWithMetadataRequest extends Shape
{
    /**
     * @param array{
     *     ArchitectureTypes?: list<'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac'>,
     *     VirtualizationTypes?: list<'hvm'|'paravirtual'>,
     *     InstanceRequirements?: InstanceRequirementsRequest
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\GetInstanceTypesFromInstanceRequirements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac'> $ArchitectureTypes
 * @property list<'hvm'|'paravirtual'> $VirtualizationTypes
 * @property Shapes\InstanceRequirementsRequest $InstanceRequirements
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetInstanceTypesFromInstanceRequirementsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ArchitectureTypes: list<'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac'>,
     *     VirtualizationTypes: list<'hvm'|'paravirtual'>,
     *     InstanceRequirements: Shapes\InstanceRequirementsRequest,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

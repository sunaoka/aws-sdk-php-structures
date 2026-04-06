<?php

namespace Sunaoka\Aws\Structures\Ec2\GetInstanceTypesFromInstanceRequirements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac'> $ArchitectureTypes
 * @property list<'hvm'|'paravirtual'> $VirtualizationTypes
 * @property Shapes\InstanceRequirementsRequest $InstanceRequirements
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class GetInstanceTypesFromInstanceRequirementsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ArchitectureTypes: list<'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac'>,
     *     VirtualizationTypes: list<'hvm'|'paravirtual'>,
     *     InstanceRequirements: Shapes\InstanceRequirementsRequest,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

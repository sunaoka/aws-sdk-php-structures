<?php

namespace Sunaoka\Aws\Structures\Iam\SimulateCustomPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $PolicyInputList
 * @property list<string> $PermissionsBoundaryPolicyInputList
 * @property list<string> $ActionNames
 * @property list<string> $ResourceArns
 * @property string $ResourcePolicy
 * @property string $ResourceOwner
 * @property string $CallerArn
 * @property list<Shapes\ContextEntry> $ContextEntries
 * @property string $ResourceHandlingOption
 * @property int<1, 1000> $MaxItems
 * @property string $Marker
 */
class SimulateCustomPolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyInputList: list<string>,
     *     PermissionsBoundaryPolicyInputList?: list<string>,
     *     ActionNames: list<string>,
     *     ResourceArns?: list<string>,
     *     ResourcePolicy?: string,
     *     ResourceOwner?: string,
     *     CallerArn?: string,
     *     ContextEntries?: list<Shapes\ContextEntry>,
     *     ResourceHandlingOption?: string,
     *     MaxItems?: int<1, 1000>,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

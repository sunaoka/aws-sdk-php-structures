<?php

namespace Sunaoka\Aws\Structures\Iam\SimulateCustomPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $PolicyInputList
 * @property list<string>|null $PermissionsBoundaryPolicyInputList
 * @property list<string> $ActionNames
 * @property list<string>|null $ResourceArns
 * @property string|null $ResourcePolicy
 * @property string|null $ResourceOwner
 * @property string|null $CallerArn
 * @property list<Shapes\ContextEntry>|null $ContextEntries
 * @property string|null $ResourceHandlingOption
 * @property int<1, 1000>|null $MaxItems
 * @property string|null $Marker
 */
class SimulateCustomPolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyInputList: list<string>,
     *     PermissionsBoundaryPolicyInputList?: list<string>|null,
     *     ActionNames: list<string>,
     *     ResourceArns?: list<string>|null,
     *     ResourcePolicy?: string|null,
     *     ResourceOwner?: string|null,
     *     CallerArn?: string|null,
     *     ContextEntries?: list<Shapes\ContextEntry>|null,
     *     ResourceHandlingOption?: string|null,
     *     MaxItems?: int<1, 1000>|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

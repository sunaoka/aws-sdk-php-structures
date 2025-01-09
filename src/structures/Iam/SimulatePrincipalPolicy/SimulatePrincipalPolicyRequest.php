<?php

namespace Sunaoka\Aws\Structures\Iam\SimulatePrincipalPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicySourceArn
 * @property list<string> $PolicyInputList
 * @property list<string> $PermissionsBoundaryPolicyInputList
 * @property list<string> $ActionNames
 * @property list<string> $ResourceArns
 * @property string $ResourcePolicy
 * @property string $ResourceOwner
 * @property string $CallerArn
 * @property list<Shapes\ContextEntry> $ContextEntries
 * @property string $ResourceHandlingOption
 * @property int $MaxItems
 * @property string $Marker
 */
class SimulatePrincipalPolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicySourceArn: string,
     *     PolicyInputList?: list<string>,
     *     PermissionsBoundaryPolicyInputList?: list<string>,
     *     ActionNames: list<string>,
     *     ResourceArns?: list<string>,
     *     ResourcePolicy?: string,
     *     ResourceOwner?: string,
     *     CallerArn?: string,
     *     ContextEntries?: list<Shapes\ContextEntry>,
     *     ResourceHandlingOption?: string,
     *     MaxItems?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

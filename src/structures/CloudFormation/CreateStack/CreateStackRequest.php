<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string|null $TemplateBody
 * @property string|null $TemplateURL
 * @property list<Shapes\Parameter>|null $Parameters
 * @property bool|null $DisableRollback
 * @property Shapes\RollbackConfiguration|null $RollbackConfiguration
 * @property int<1, max>|null $TimeoutInMinutes
 * @property list<string>|null $NotificationARNs
 * @property list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>|null $Capabilities
 * @property list<string>|null $ResourceTypes
 * @property string|null $RoleARN
 * @property 'DO_NOTHING'|'ROLLBACK'|'DELETE'|null $OnFailure
 * @property string|null $StackPolicyBody
 * @property string|null $StackPolicyURL
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientRequestToken
 * @property bool|null $EnableTerminationProtection
 * @property bool|null $RetainExceptOnCreate
 */
class CreateStackRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     TemplateBody?: string|null,
     *     TemplateURL?: string|null,
     *     Parameters?: list<Shapes\Parameter>|null,
     *     DisableRollback?: bool|null,
     *     RollbackConfiguration?: Shapes\RollbackConfiguration|null,
     *     TimeoutInMinutes?: int<1, max>|null,
     *     NotificationARNs?: list<string>|null,
     *     Capabilities?: list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>|null,
     *     ResourceTypes?: list<string>|null,
     *     RoleARN?: string|null,
     *     OnFailure?: 'DO_NOTHING'|'ROLLBACK'|'DELETE'|null,
     *     StackPolicyBody?: string|null,
     *     StackPolicyURL?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientRequestToken?: string|null,
     *     EnableTerminationProtection?: bool|null,
     *     RetainExceptOnCreate?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

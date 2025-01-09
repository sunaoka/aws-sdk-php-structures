<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string $TemplateBody
 * @property string $TemplateURL
 * @property list<Shapes\Parameter> $Parameters
 * @property bool $DisableRollback
 * @property Shapes\RollbackConfiguration $RollbackConfiguration
 * @property int $TimeoutInMinutes
 * @property list<string> $NotificationARNs
 * @property list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'> $Capabilities
 * @property list<string> $ResourceTypes
 * @property string $RoleARN
 * @property 'DO_NOTHING'|'ROLLBACK'|'DELETE' $OnFailure
 * @property string $StackPolicyBody
 * @property string $StackPolicyURL
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientRequestToken
 * @property bool $EnableTerminationProtection
 * @property bool $RetainExceptOnCreate
 */
class CreateStackRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     TemplateBody?: string,
     *     TemplateURL?: string,
     *     Parameters?: list<Shapes\Parameter>,
     *     DisableRollback?: bool,
     *     RollbackConfiguration?: Shapes\RollbackConfiguration,
     *     TimeoutInMinutes?: int,
     *     NotificationARNs?: list<string>,
     *     Capabilities?: list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>,
     *     ResourceTypes?: list<string>,
     *     RoleARN?: string,
     *     OnFailure?: 'DO_NOTHING'|'ROLLBACK'|'DELETE',
     *     StackPolicyBody?: string,
     *     StackPolicyURL?: string,
     *     Tags?: list<Shapes\Tag>,
     *     ClientRequestToken?: string,
     *     EnableTerminationProtection?: bool,
     *     RetainExceptOnCreate?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudFormation\UpdateStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string $TemplateBody
 * @property string $TemplateURL
 * @property bool $UsePreviousTemplate
 * @property string $StackPolicyDuringUpdateBody
 * @property string $StackPolicyDuringUpdateURL
 * @property list<Shapes\Parameter> $Parameters
 * @property list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'> $Capabilities
 * @property list<string> $ResourceTypes
 * @property string $RoleARN
 * @property Shapes\RollbackConfiguration $RollbackConfiguration
 * @property string $StackPolicyBody
 * @property string $StackPolicyURL
 * @property list<string> $NotificationARNs
 * @property list<Shapes\Tag> $Tags
 * @property bool $DisableRollback
 * @property string $ClientRequestToken
 * @property bool $RetainExceptOnCreate
 */
class UpdateStackRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     TemplateBody?: string,
     *     TemplateURL?: string,
     *     UsePreviousTemplate?: bool,
     *     StackPolicyDuringUpdateBody?: string,
     *     StackPolicyDuringUpdateURL?: string,
     *     Parameters?: list<Shapes\Parameter>,
     *     Capabilities?: list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>,
     *     ResourceTypes?: list<string>,
     *     RoleARN?: string,
     *     RollbackConfiguration?: Shapes\RollbackConfiguration,
     *     StackPolicyBody?: string,
     *     StackPolicyURL?: string,
     *     NotificationARNs?: list<string>,
     *     Tags?: list<Shapes\Tag>,
     *     DisableRollback?: bool,
     *     ClientRequestToken?: string,
     *     RetainExceptOnCreate?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudFormation\UpdateStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string|null $TemplateBody
 * @property string|null $TemplateURL
 * @property bool|null $UsePreviousTemplate
 * @property string|null $StackPolicyDuringUpdateBody
 * @property string|null $StackPolicyDuringUpdateURL
 * @property list<Shapes\Parameter>|null $Parameters
 * @property list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>|null $Capabilities
 * @property list<string>|null $ResourceTypes
 * @property string|null $RoleARN
 * @property Shapes\RollbackConfiguration|null $RollbackConfiguration
 * @property string|null $StackPolicyBody
 * @property string|null $StackPolicyURL
 * @property list<string>|null $NotificationARNs
 * @property list<Shapes\Tag>|null $Tags
 * @property bool|null $DisableRollback
 * @property string|null $ClientRequestToken
 * @property bool|null $RetainExceptOnCreate
 */
class UpdateStackRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     TemplateBody?: string|null,
     *     TemplateURL?: string|null,
     *     UsePreviousTemplate?: bool|null,
     *     StackPolicyDuringUpdateBody?: string|null,
     *     StackPolicyDuringUpdateURL?: string|null,
     *     Parameters?: list<Shapes\Parameter>|null,
     *     Capabilities?: list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>|null,
     *     ResourceTypes?: list<string>|null,
     *     RoleARN?: string|null,
     *     RollbackConfiguration?: Shapes\RollbackConfiguration|null,
     *     StackPolicyBody?: string|null,
     *     StackPolicyURL?: string|null,
     *     NotificationARNs?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     DisableRollback?: bool|null,
     *     ClientRequestToken?: string|null,
     *     RetainExceptOnCreate?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

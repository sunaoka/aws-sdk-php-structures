<?php

namespace Sunaoka\Aws\Structures\Iam\GetRoleTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TemplateArn
 * @property string|null $TemplateName
 * @property string|null $TemplateVersionId
 * @property string|null $Description
 * @property int|null $MajorVersion
 * @property int|null $DefaultMinorVersion
 * @property 'Service'|null $ManagedByType
 * @property string|null $ManagedByValue
 * @property bool|null $Enabled
 * @property int|null $MinorVersion
 * @property string|null $RoleNamePattern
 * @property string|null $RolePathPattern
 * @property string|null $RoleDescriptionPattern
 * @property string|null $AssumeRolePolicyDocumentTemplate
 * @property list<InlinePolicy>|null $InlinePolicyTemplates
 * @property list<string>|null $ManagedPolicyArns
 * @property string|null $PermissionBoundaryArn
 * @property list<ParameterDefinition>|null $ParametersDefinition
 * @property list<TagTemplate>|null $RoleTagsTemplate
 * @property int<3600, 43200>|null $MaxSessionDuration
 * @property bool|null $VersionEnabled
 * @property \Aws\Api\DateTimeResult|null $CreateTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdateTimestamp
 */
class RoleTemplateVersion extends Shape
{
    /**
     * @param array{
     *     TemplateArn?: string|null,
     *     TemplateName?: string|null,
     *     TemplateVersionId?: string|null,
     *     Description?: string|null,
     *     MajorVersion?: int|null,
     *     DefaultMinorVersion?: int|null,
     *     ManagedByType?: 'Service'|null,
     *     ManagedByValue?: string|null,
     *     Enabled?: bool|null,
     *     MinorVersion?: int|null,
     *     RoleNamePattern?: string|null,
     *     RolePathPattern?: string|null,
     *     RoleDescriptionPattern?: string|null,
     *     AssumeRolePolicyDocumentTemplate?: string|null,
     *     InlinePolicyTemplates?: list<InlinePolicy>|null,
     *     ManagedPolicyArns?: list<string>|null,
     *     PermissionBoundaryArn?: string|null,
     *     ParametersDefinition?: list<ParameterDefinition>|null,
     *     RoleTagsTemplate?: list<TagTemplate>|null,
     *     MaxSessionDuration?: int<3600, 43200>|null,
     *     VersionEnabled?: bool|null,
     *     CreateTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdateTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

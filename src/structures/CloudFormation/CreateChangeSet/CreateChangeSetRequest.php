<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateChangeSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string|null $TemplateBody
 * @property string|null $TemplateURL
 * @property bool|null $UsePreviousTemplate
 * @property list<Shapes\Parameter>|null $Parameters
 * @property list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>|null $Capabilities
 * @property list<string>|null $ResourceTypes
 * @property string|null $RoleARN
 * @property Shapes\RollbackConfiguration|null $RollbackConfiguration
 * @property list<string>|null $NotificationARNs
 * @property list<Shapes\Tag>|null $Tags
 * @property string $ChangeSetName
 * @property string|null $ClientToken
 * @property string|null $Description
 * @property 'CREATE'|'UPDATE'|'IMPORT'|null $ChangeSetType
 * @property list<Shapes\ResourceToImport>|null $ResourcesToImport
 * @property bool|null $IncludeNestedStacks
 * @property 'DO_NOTHING'|'ROLLBACK'|'DELETE'|null $OnStackFailure
 * @property bool|null $ImportExistingResources
 * @property 'REVERT_DRIFT'|null $DeploymentMode
 */
class CreateChangeSetRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     TemplateBody?: string|null,
     *     TemplateURL?: string|null,
     *     UsePreviousTemplate?: bool|null,
     *     Parameters?: list<Shapes\Parameter>|null,
     *     Capabilities?: list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>|null,
     *     ResourceTypes?: list<string>|null,
     *     RoleARN?: string|null,
     *     RollbackConfiguration?: Shapes\RollbackConfiguration|null,
     *     NotificationARNs?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ChangeSetName: string,
     *     ClientToken?: string|null,
     *     Description?: string|null,
     *     ChangeSetType?: 'CREATE'|'UPDATE'|'IMPORT'|null,
     *     ResourcesToImport?: list<Shapes\ResourceToImport>|null,
     *     IncludeNestedStacks?: bool|null,
     *     OnStackFailure?: 'DO_NOTHING'|'ROLLBACK'|'DELETE'|null,
     *     ImportExistingResources?: bool|null,
     *     DeploymentMode?: 'REVERT_DRIFT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

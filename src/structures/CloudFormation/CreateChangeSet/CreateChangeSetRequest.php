<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateChangeSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string $TemplateBody
 * @property string $TemplateURL
 * @property bool $UsePreviousTemplate
 * @property list<Shapes\Parameter> $Parameters
 * @property list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'> $Capabilities
 * @property list<string> $ResourceTypes
 * @property string $RoleARN
 * @property Shapes\RollbackConfiguration $RollbackConfiguration
 * @property list<string> $NotificationARNs
 * @property list<Shapes\Tag> $Tags
 * @property string $ChangeSetName
 * @property string $ClientToken
 * @property string $Description
 * @property 'CREATE'|'UPDATE'|'IMPORT' $ChangeSetType
 * @property list<Shapes\ResourceToImport> $ResourcesToImport
 * @property bool $IncludeNestedStacks
 * @property 'DO_NOTHING'|'ROLLBACK'|'DELETE' $OnStackFailure
 * @property bool $ImportExistingResources
 */
class CreateChangeSetRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     TemplateBody?: string,
     *     TemplateURL?: string,
     *     UsePreviousTemplate?: bool,
     *     Parameters?: list<Shapes\Parameter>,
     *     Capabilities?: list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>,
     *     ResourceTypes?: list<string>,
     *     RoleARN?: string,
     *     RollbackConfiguration?: Shapes\RollbackConfiguration,
     *     NotificationARNs?: list<string>,
     *     Tags?: list<Shapes\Tag>,
     *     ChangeSetName: string,
     *     ClientToken?: string,
     *     Description?: string,
     *     ChangeSetType?: 'CREATE'|'UPDATE'|'IMPORT',
     *     ResourcesToImport?: list<Shapes\ResourceToImport>,
     *     IncludeNestedStacks?: bool,
     *     OnStackFailure?: 'DO_NOTHING'|'ROLLBACK'|'DELETE',
     *     ImportExistingResources?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

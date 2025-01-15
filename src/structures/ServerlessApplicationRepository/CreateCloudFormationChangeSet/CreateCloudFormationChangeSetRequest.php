<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\CreateCloudFormationChangeSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property list<string>|null $Capabilities
 * @property string|null $ChangeSetName
 * @property string|null $ClientToken
 * @property string|null $Description
 * @property list<string>|null $NotificationArns
 * @property list<Shapes\ParameterValue>|null $ParameterOverrides
 * @property list<string>|null $ResourceTypes
 * @property Shapes\RollbackConfiguration|null $RollbackConfiguration
 * @property string|null $SemanticVersion
 * @property string $StackName
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $TemplateId
 */
class CreateCloudFormationChangeSetRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     Capabilities?: list<string>|null,
     *     ChangeSetName?: string|null,
     *     ClientToken?: string|null,
     *     Description?: string|null,
     *     NotificationArns?: list<string>|null,
     *     ParameterOverrides?: list<Shapes\ParameterValue>|null,
     *     ResourceTypes?: list<string>|null,
     *     RollbackConfiguration?: Shapes\RollbackConfiguration|null,
     *     SemanticVersion?: string|null,
     *     StackName: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     TemplateId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

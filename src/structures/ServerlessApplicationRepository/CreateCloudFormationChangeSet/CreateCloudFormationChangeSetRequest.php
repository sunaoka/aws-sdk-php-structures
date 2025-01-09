<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\CreateCloudFormationChangeSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property list<string> $Capabilities
 * @property string $ChangeSetName
 * @property string $ClientToken
 * @property string $Description
 * @property list<string> $NotificationArns
 * @property list<Shapes\ParameterValue> $ParameterOverrides
 * @property list<string> $ResourceTypes
 * @property Shapes\RollbackConfiguration $RollbackConfiguration
 * @property string $SemanticVersion
 * @property string $StackName
 * @property list<Shapes\Tag> $Tags
 * @property string $TemplateId
 */
class CreateCloudFormationChangeSetRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     Capabilities?: list<string>,
     *     ChangeSetName?: string,
     *     ClientToken?: string,
     *     Description?: string,
     *     NotificationArns?: list<string>,
     *     ParameterOverrides?: list<Shapes\ParameterValue>,
     *     ResourceTypes?: list<string>,
     *     RollbackConfiguration?: Shapes\RollbackConfiguration,
     *     SemanticVersion?: string,
     *     StackName: string,
     *     Tags?: list<Shapes\Tag>,
     *     TemplateId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

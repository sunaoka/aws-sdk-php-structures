<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\UpdateStudioComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property Shapes\StudioComponentConfiguration|null $configuration
 * @property string|null $description
 * @property list<string>|null $ec2SecurityGroupIds
 * @property list<Shapes\StudioComponentInitializationScript>|null $initializationScripts
 * @property string|null $name
 * @property string|null $runtimeRoleArn
 * @property list<Shapes\ScriptParameterKeyValue>|null $scriptParameters
 * @property string|null $secureInitializationRoleArn
 * @property string $studioComponentId
 * @property string $studioId
 * @property 'AWS_MANAGED_MICROSOFT_AD'|'AMAZON_FSX_FOR_WINDOWS'|'AMAZON_FSX_FOR_LUSTRE'|'CUSTOM'|null $subtype
 * @property 'ACTIVE_DIRECTORY'|'SHARED_FILE_SYSTEM'|'COMPUTE_FARM'|'LICENSE_SERVICE'|'CUSTOM'|null $type
 */
class UpdateStudioComponentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     configuration?: Shapes\StudioComponentConfiguration|null,
     *     description?: string|null,
     *     ec2SecurityGroupIds?: list<string>|null,
     *     initializationScripts?: list<Shapes\StudioComponentInitializationScript>|null,
     *     name?: string|null,
     *     runtimeRoleArn?: string|null,
     *     scriptParameters?: list<Shapes\ScriptParameterKeyValue>|null,
     *     secureInitializationRoleArn?: string|null,
     *     studioComponentId: string,
     *     studioId: string,
     *     subtype?: 'AWS_MANAGED_MICROSOFT_AD'|'AMAZON_FSX_FOR_WINDOWS'|'AMAZON_FSX_FOR_LUSTRE'|'CUSTOM'|null,
     *     type?: 'ACTIVE_DIRECTORY'|'SHARED_FILE_SYSTEM'|'COMPUTE_FARM'|'LICENSE_SERVICE'|'CUSTOM'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

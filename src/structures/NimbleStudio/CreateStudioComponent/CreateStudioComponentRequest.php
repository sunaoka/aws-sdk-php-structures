<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\CreateStudioComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property Shapes\StudioComponentConfiguration|null $configuration
 * @property string|null $description
 * @property list<string>|null $ec2SecurityGroupIds
 * @property list<Shapes\StudioComponentInitializationScript>|null $initializationScripts
 * @property string $name
 * @property string|null $runtimeRoleArn
 * @property list<Shapes\ScriptParameterKeyValue>|null $scriptParameters
 * @property string|null $secureInitializationRoleArn
 * @property string $studioId
 * @property 'AWS_MANAGED_MICROSOFT_AD'|'AMAZON_FSX_FOR_WINDOWS'|'AMAZON_FSX_FOR_LUSTRE'|'CUSTOM'|null $subtype
 * @property array<string, string>|null $tags
 * @property 'ACTIVE_DIRECTORY'|'SHARED_FILE_SYSTEM'|'COMPUTE_FARM'|'LICENSE_SERVICE'|'CUSTOM' $type
 */
class CreateStudioComponentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     configuration?: Shapes\StudioComponentConfiguration|null,
     *     description?: string|null,
     *     ec2SecurityGroupIds?: list<string>|null,
     *     initializationScripts?: list<Shapes\StudioComponentInitializationScript>|null,
     *     name: string,
     *     runtimeRoleArn?: string|null,
     *     scriptParameters?: list<Shapes\ScriptParameterKeyValue>|null,
     *     secureInitializationRoleArn?: string|null,
     *     studioId: string,
     *     subtype?: 'AWS_MANAGED_MICROSOFT_AD'|'AMAZON_FSX_FOR_WINDOWS'|'AMAZON_FSX_FOR_LUSTRE'|'CUSTOM'|null,
     *     tags?: array<string, string>|null,
     *     type: 'ACTIVE_DIRECTORY'|'SHARED_FILE_SYSTEM'|'COMPUTE_FARM'|'LICENSE_SERVICE'|'CUSTOM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

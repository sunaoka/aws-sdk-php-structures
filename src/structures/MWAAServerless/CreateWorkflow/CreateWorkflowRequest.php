<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\CreateWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $ClientToken
 * @property Shapes\DefinitionS3Location $DefinitionS3Location
 * @property string $RoleArn
 * @property string|null $Description
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 * @property Shapes\LoggingConfiguration|null $LoggingConfiguration
 * @property int|null $EngineVersion
 * @property Shapes\NetworkConfiguration|null $NetworkConfiguration
 * @property array<string, string>|null $Tags
 * @property string|null $TriggerMode
 */
class CreateWorkflowRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ClientToken?: string|null,
     *     DefinitionS3Location: Shapes\DefinitionS3Location,
     *     RoleArn: string,
     *     Description?: string|null,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     LoggingConfiguration?: Shapes\LoggingConfiguration|null,
     *     EngineVersion?: int|null,
     *     NetworkConfiguration?: Shapes\NetworkConfiguration|null,
     *     Tags?: array<string, string>|null,
     *     TriggerMode?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\UpdateWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkflowArn
 * @property Shapes\DefinitionS3Location $DefinitionS3Location
 * @property string $RoleArn
 * @property string|null $Description
 * @property Shapes\LoggingConfiguration|null $LoggingConfiguration
 * @property int|null $EngineVersion
 * @property Shapes\NetworkConfiguration|null $NetworkConfiguration
 * @property string|null $TriggerMode
 */
class UpdateWorkflowRequest extends Request
{
    /**
     * @param array{
     *     WorkflowArn: string,
     *     DefinitionS3Location: Shapes\DefinitionS3Location,
     *     RoleArn: string,
     *     Description?: string|null,
     *     LoggingConfiguration?: Shapes\LoggingConfiguration|null,
     *     EngineVersion?: int|null,
     *     NetworkConfiguration?: Shapes\NetworkConfiguration|null,
     *     TriggerMode?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

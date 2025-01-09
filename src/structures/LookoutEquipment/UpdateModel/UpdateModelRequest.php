<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\UpdateModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelName
 * @property Shapes\LabelsInputConfiguration $LabelsInputConfiguration
 * @property string $RoleArn
 * @property Shapes\ModelDiagnosticsOutputConfiguration $ModelDiagnosticsOutputConfiguration
 */
class UpdateModelRequest extends Request
{
    /**
     * @param array{
     *     ModelName: string,
     *     LabelsInputConfiguration?: Shapes\LabelsInputConfiguration,
     *     RoleArn?: string,
     *     ModelDiagnosticsOutputConfiguration?: Shapes\ModelDiagnosticsOutputConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

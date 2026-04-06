<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\UpdateModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelName
 * @property Shapes\LabelsInputConfiguration|null $LabelsInputConfiguration
 * @property string|null $RoleArn
 * @property Shapes\ModelDiagnosticsOutputConfiguration|null $ModelDiagnosticsOutputConfiguration
 */
class UpdateModelRequest extends Request
{
    /**
     * @param array{
     *     ModelName: string,
     *     LabelsInputConfiguration?: Shapes\LabelsInputConfiguration|null,
     *     RoleArn?: string|null,
     *     ModelDiagnosticsOutputConfiguration?: Shapes\ModelDiagnosticsOutputConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

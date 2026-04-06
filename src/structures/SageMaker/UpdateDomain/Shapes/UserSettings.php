<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExecutionRole
 * @property list<string>|null $SecurityGroups
 * @property SharingSettings|null $SharingSettings
 * @property JupyterServerAppSettings|null $JupyterServerAppSettings
 * @property KernelGatewayAppSettings|null $KernelGatewayAppSettings
 * @property TensorBoardAppSettings|null $TensorBoardAppSettings
 * @property RStudioServerProAppSettings|null $RStudioServerProAppSettings
 * @property RSessionAppSettings|null $RSessionAppSettings
 * @property CanvasAppSettings|null $CanvasAppSettings
 */
class UserSettings extends Shape
{
    /**
     * @param array{
     *     ExecutionRole?: string|null,
     *     SecurityGroups?: list<string>|null,
     *     SharingSettings?: SharingSettings|null,
     *     JupyterServerAppSettings?: JupyterServerAppSettings|null,
     *     KernelGatewayAppSettings?: KernelGatewayAppSettings|null,
     *     TensorBoardAppSettings?: TensorBoardAppSettings|null,
     *     RStudioServerProAppSettings?: RStudioServerProAppSettings|null,
     *     RSessionAppSettings?: RSessionAppSettings|null,
     *     CanvasAppSettings?: CanvasAppSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

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
 * @property CodeEditorAppSettings|null $CodeEditorAppSettings
 * @property JupyterLabAppSettings|null $JupyterLabAppSettings
 * @property DefaultSpaceStorageSettings|null $SpaceStorageSettings
 * @property string|null $DefaultLandingUri
 * @property 'ENABLED'|'DISABLED'|null $StudioWebPortal
 * @property CustomPosixUserConfig|null $CustomPosixUserConfig
 * @property list<CustomFileSystemConfig>|null $CustomFileSystemConfigs
 * @property StudioWebPortalSettings|null $StudioWebPortalSettings
 * @property 'Enabled'|'Disabled'|'DefaultAsDomain'|null $AutoMountHomeEFS
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
     *     CanvasAppSettings?: CanvasAppSettings|null,
     *     CodeEditorAppSettings?: CodeEditorAppSettings|null,
     *     JupyterLabAppSettings?: JupyterLabAppSettings|null,
     *     SpaceStorageSettings?: DefaultSpaceStorageSettings|null,
     *     DefaultLandingUri?: string|null,
     *     StudioWebPortal?: 'ENABLED'|'DISABLED'|null,
     *     CustomPosixUserConfig?: CustomPosixUserConfig|null,
     *     CustomFileSystemConfigs?: list<CustomFileSystemConfig>|null,
     *     StudioWebPortalSettings?: StudioWebPortalSettings|null,
     *     AutoMountHomeEFS?: 'Enabled'|'Disabled'|'DefaultAsDomain'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

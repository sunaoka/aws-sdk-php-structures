<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExecutionRole
 * @property list<string> $SecurityGroups
 * @property SharingSettings $SharingSettings
 * @property JupyterServerAppSettings $JupyterServerAppSettings
 * @property KernelGatewayAppSettings $KernelGatewayAppSettings
 * @property TensorBoardAppSettings $TensorBoardAppSettings
 * @property RStudioServerProAppSettings $RStudioServerProAppSettings
 * @property RSessionAppSettings $RSessionAppSettings
 * @property CanvasAppSettings $CanvasAppSettings
 * @property CodeEditorAppSettings $CodeEditorAppSettings
 * @property JupyterLabAppSettings $JupyterLabAppSettings
 * @property DefaultSpaceStorageSettings $SpaceStorageSettings
 * @property string $DefaultLandingUri
 * @property 'ENABLED'|'DISABLED' $StudioWebPortal
 * @property CustomPosixUserConfig $CustomPosixUserConfig
 * @property list<CustomFileSystemConfig> $CustomFileSystemConfigs
 * @property StudioWebPortalSettings $StudioWebPortalSettings
 * @property 'Enabled'|'Disabled'|'DefaultAsDomain' $AutoMountHomeEFS
 */
class UserSettings extends Shape
{
    /**
     * @param array{
     *     ExecutionRole?: string,
     *     SecurityGroups?: list<string>,
     *     SharingSettings?: SharingSettings,
     *     JupyterServerAppSettings?: JupyterServerAppSettings,
     *     KernelGatewayAppSettings?: KernelGatewayAppSettings,
     *     TensorBoardAppSettings?: TensorBoardAppSettings,
     *     RStudioServerProAppSettings?: RStudioServerProAppSettings,
     *     RSessionAppSettings?: RSessionAppSettings,
     *     CanvasAppSettings?: CanvasAppSettings,
     *     CodeEditorAppSettings?: CodeEditorAppSettings,
     *     JupyterLabAppSettings?: JupyterLabAppSettings,
     *     SpaceStorageSettings?: DefaultSpaceStorageSettings,
     *     DefaultLandingUri?: string,
     *     StudioWebPortal?: 'ENABLED'|'DISABLED',
     *     CustomPosixUserConfig?: CustomPosixUserConfig,
     *     CustomFileSystemConfigs?: list<CustomFileSystemConfig>,
     *     StudioWebPortalSettings?: StudioWebPortalSettings,
     *     AutoMountHomeEFS?: 'Enabled'|'Disabled'|'DefaultAsDomain'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimeSeriesForecastingSettings $TimeSeriesForecastingSettings
 * @property ModelRegisterSettings $ModelRegisterSettings
 * @property WorkspaceSettings $WorkspaceSettings
 * @property list<IdentityProviderOAuthSetting> $IdentityProviderOAuthSettings
 * @property DirectDeploySettings $DirectDeploySettings
 * @property KendraSettings $KendraSettings
 * @property GenerativeAiSettings $GenerativeAiSettings
 * @property EmrServerlessSettings $EmrServerlessSettings
 */
class CanvasAppSettings extends Shape
{
    /**
     * @param array{
     *     TimeSeriesForecastingSettings?: TimeSeriesForecastingSettings,
     *     ModelRegisterSettings?: ModelRegisterSettings,
     *     WorkspaceSettings?: WorkspaceSettings,
     *     IdentityProviderOAuthSettings?: list<IdentityProviderOAuthSetting>,
     *     DirectDeploySettings?: DirectDeploySettings,
     *     KendraSettings?: KendraSettings,
     *     GenerativeAiSettings?: GenerativeAiSettings,
     *     EmrServerlessSettings?: EmrServerlessSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

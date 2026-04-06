<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimeSeriesForecastingSettings|null $TimeSeriesForecastingSettings
 * @property ModelRegisterSettings|null $ModelRegisterSettings
 * @property WorkspaceSettings|null $WorkspaceSettings
 * @property list<IdentityProviderOAuthSetting>|null $IdentityProviderOAuthSettings
 * @property DirectDeploySettings|null $DirectDeploySettings
 * @property KendraSettings|null $KendraSettings
 * @property GenerativeAiSettings|null $GenerativeAiSettings
 * @property EmrServerlessSettings|null $EmrServerlessSettings
 */
class CanvasAppSettings extends Shape
{
    /**
     * @param array{
     *     TimeSeriesForecastingSettings?: TimeSeriesForecastingSettings|null,
     *     ModelRegisterSettings?: ModelRegisterSettings|null,
     *     WorkspaceSettings?: WorkspaceSettings|null,
     *     IdentityProviderOAuthSettings?: list<IdentityProviderOAuthSetting>|null,
     *     DirectDeploySettings?: DirectDeploySettings|null,
     *     KendraSettings?: KendraSettings|null,
     *     GenerativeAiSettings?: GenerativeAiSettings|null,
     *     EmrServerlessSettings?: EmrServerlessSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimeSeriesForecastingSettings|null $TimeSeriesForecastingSettings
 * @property ModelRegisterSettings|null $ModelRegisterSettings
 * @property WorkspaceSettings|null $WorkspaceSettings
 */
class CanvasAppSettings extends Shape
{
    /**
     * @param array{
     *     TimeSeriesForecastingSettings?: TimeSeriesForecastingSettings|null,
     *     ModelRegisterSettings?: ModelRegisterSettings|null,
     *     WorkspaceSettings?: WorkspaceSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

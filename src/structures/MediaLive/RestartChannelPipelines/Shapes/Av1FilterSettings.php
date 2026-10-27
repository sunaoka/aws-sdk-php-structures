<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoFilterSettings|null $AutoFilterSettings
 * @property NoneFilterSettings|null $NoneFilterSettings
 * @property PerceptualFilterSettings|null $PerceptualFilterSettings
 */
class Av1FilterSettings extends Shape
{
    /**
     * @param array{
     *     AutoFilterSettings?: AutoFilterSettings|null,
     *     NoneFilterSettings?: NoneFilterSettings|null,
     *     PerceptualFilterSettings?: PerceptualFilterSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

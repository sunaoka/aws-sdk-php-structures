<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListTestRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $experimentArn
 * @property string|null $experimentTemplateId
 */
class Experiment extends Shape
{
    /**
     * @param array{
     *     experimentArn?: string|null,
     *     experimentTemplateId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

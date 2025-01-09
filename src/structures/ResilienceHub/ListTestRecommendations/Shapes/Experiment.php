<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListTestRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $experimentArn
 * @property string $experimentTemplateId
 */
class Experiment extends Shape
{
    /**
     * @param array{
     *     experimentArn?: string,
     *     experimentTemplateId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListSopRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $alarmArn
 * @property string|null $source
 */
class Alarm extends Shape
{
    /**
     * @param array{
     *     alarmArn?: string|null,
     *     source?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

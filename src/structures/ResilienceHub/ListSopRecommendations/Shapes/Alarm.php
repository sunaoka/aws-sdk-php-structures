<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListSopRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $alarmArn
 * @property string $source
 */
class Alarm extends Shape
{
    /**
     * @param array{
     *     alarmArn?: string,
     *     source?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEntityRecognizers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FlywheelStatsS3Prefix
 */
class EntityRecognizerOutputDataConfig extends Shape
{
    /**
     * @param array{FlywheelStatsS3Prefix?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

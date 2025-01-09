<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeEntityRecognizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FlywheelStatsS3Prefix
 */
class EntityRecognizerOutputDataConfig extends Shape
{
    /**
     * @param array{FlywheelStatsS3Prefix?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

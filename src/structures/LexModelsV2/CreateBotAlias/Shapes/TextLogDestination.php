<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogGroupLogDestination $cloudWatch
 */
class TextLogDestination extends Shape
{
    /**
     * @param array{cloudWatch: CloudWatchLogGroupLogDestination} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

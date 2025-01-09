<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cloudWatchLogGroupArn
 * @property string $logPrefix
 */
class CloudWatchLogGroupLogDestination extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogGroupArn: string,
     *     logPrefix: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

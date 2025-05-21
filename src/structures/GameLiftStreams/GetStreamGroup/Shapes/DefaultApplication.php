<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\GetStreamGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Id
 */
class DefaultApplication extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Id?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

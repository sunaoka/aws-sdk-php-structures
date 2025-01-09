<?php

namespace Sunaoka\Aws\Structures\Amplify\UpdateApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $source
 * @property string $target
 * @property string $status
 * @property string $condition
 */
class CustomRule extends Shape
{
    /**
     * @param array{
     *     source: string,
     *     target: string,
     *     status?: string,
     *     condition?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

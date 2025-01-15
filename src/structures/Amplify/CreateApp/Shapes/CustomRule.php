<?php

namespace Sunaoka\Aws\Structures\Amplify\CreateApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $source
 * @property string $target
 * @property string|null $status
 * @property string|null $condition
 */
class CustomRule extends Shape
{
    /**
     * @param array{
     *     source: string,
     *     target: string,
     *     status?: string|null,
     *     condition?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

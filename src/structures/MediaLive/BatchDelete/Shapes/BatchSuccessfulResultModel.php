<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchDelete\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $State
 */
class BatchSuccessfulResultModel extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Id?: string,
     *     State?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

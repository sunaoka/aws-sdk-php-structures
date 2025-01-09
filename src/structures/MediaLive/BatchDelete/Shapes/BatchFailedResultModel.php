<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchDelete\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Code
 * @property string $Id
 * @property string $Message
 */
class BatchFailedResultModel extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Code?: string,
     *     Id?: string,
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

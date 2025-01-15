<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchStart\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Code
 * @property string|null $Id
 * @property string|null $Message
 */
class BatchFailedResultModel extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Code?: string|null,
     *     Id?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Macie\UpdateS3Resources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FULL'|'NONE'|null $oneTime
 * @property 'FULL'|null $continuous
 */
class ClassificationTypeUpdate extends Shape
{
    /**
     * @param array{
     *     oneTime?: 'FULL'|'NONE'|null,
     *     continuous?: 'FULL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

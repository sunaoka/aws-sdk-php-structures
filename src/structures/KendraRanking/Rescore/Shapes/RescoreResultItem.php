<?php

namespace Sunaoka\Aws\Structures\KendraRanking\Rescore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentId
 * @property float $Score
 */
class RescoreResultItem extends Shape
{
    /**
     * @param array{
     *     DocumentId?: string,
     *     Score?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

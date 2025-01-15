<?php

namespace Sunaoka\Aws\Structures\KendraRanking\Rescore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DocumentId
 * @property float|null $Score
 */
class RescoreResultItem extends Shape
{
    /**
     * @param array{
     *     DocumentId?: string|null,
     *     Score?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

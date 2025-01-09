<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchJobResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ResultItem $S3ResultItem
 * @property EBSResultItem $EBSResultItem
 */
class ResultItem extends Shape
{
    /**
     * @param array{
     *     S3ResultItem?: S3ResultItem,
     *     EBSResultItem?: EBSResultItem
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

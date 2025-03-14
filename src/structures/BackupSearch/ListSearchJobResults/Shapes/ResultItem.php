<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchJobResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ResultItem|null $S3ResultItem
 * @property EBSResultItem|null $EBSResultItem
 */
class ResultItem extends Shape
{
    /**
     * @param array{
     *     S3ResultItem?: S3ResultItem|null,
     *     EBSResultItem?: EBSResultItem|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

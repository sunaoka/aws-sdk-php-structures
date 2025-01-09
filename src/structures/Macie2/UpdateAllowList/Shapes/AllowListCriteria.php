<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateAllowList\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $regex
 * @property S3WordsList $s3WordsList
 */
class AllowListCriteria extends Shape
{
    /**
     * @param array{
     *     regex?: string,
     *     s3WordsList?: S3WordsList
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

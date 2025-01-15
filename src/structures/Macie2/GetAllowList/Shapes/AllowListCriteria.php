<?php

namespace Sunaoka\Aws\Structures\Macie2\GetAllowList\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $regex
 * @property S3WordsList|null $s3WordsList
 */
class AllowListCriteria extends Shape
{
    /**
     * @param array{
     *     regex?: string|null,
     *     s3WordsList?: S3WordsList|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

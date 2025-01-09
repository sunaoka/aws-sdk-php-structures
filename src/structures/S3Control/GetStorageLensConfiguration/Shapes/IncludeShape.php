<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Buckets
 * @property list<string> $Regions
 */
class IncludeShape extends Shape
{
    /**
     * @param array{
     *     Buckets?: list<string>,
     *     Regions?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Omics\GetReferenceMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FileInformation|null $source
 * @property FileInformation|null $index
 */
class ReferenceFiles extends Shape
{
    /**
     * @param array{
     *     source?: FileInformation|null,
     *     index?: FileInformation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Omics\GetReferenceMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FileInformation $source
 * @property FileInformation $index
 */
class ReferenceFiles extends Shape
{
    /**
     * @param array{
     *     source?: FileInformation,
     *     index?: FileInformation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

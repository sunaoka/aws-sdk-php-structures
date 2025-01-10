<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\UpdateImageSetMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $removableAttributes
 * @property string|resource|\Psr\Http\Message\StreamInterface $updatableAttributes
 */
class DICOMUpdates extends Shape
{
    /**
     * @param array{
     *     removableAttributes?: string|resource|\Psr\Http\Message\StreamInterface,
     *     updatableAttributes?: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

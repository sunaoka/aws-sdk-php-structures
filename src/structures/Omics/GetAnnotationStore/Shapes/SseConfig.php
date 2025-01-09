<?php

namespace Sunaoka\Aws\Structures\Omics\GetAnnotationStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KMS' $type
 * @property string $keyArn
 */
class SseConfig extends Shape
{
    /**
     * @param array{
     *     type: 'KMS',
     *     keyArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

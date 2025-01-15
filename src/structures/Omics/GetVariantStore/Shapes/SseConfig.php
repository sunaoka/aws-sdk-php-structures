<?php

namespace Sunaoka\Aws\Structures\Omics\GetVariantStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KMS' $type
 * @property string|null $keyArn
 */
class SseConfig extends Shape
{
    /**
     * @param array{
     *     type: 'KMS',
     *     keyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

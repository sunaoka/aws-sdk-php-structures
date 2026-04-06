<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListStreamingImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $keyArn
 * @property 'CUSTOMER_MANAGED_KEY' $keyType
 */
class StreamingImageEncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     keyArn?: string|null,
     *     keyType: 'CUSTOMER_MANAGED_KEY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

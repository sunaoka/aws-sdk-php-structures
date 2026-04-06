<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetStudio\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $keyArn
 * @property 'AWS_OWNED_KEY'|'CUSTOMER_MANAGED_KEY' $keyType
 */
class StudioEncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     keyArn?: string|null,
     *     keyType: 'AWS_OWNED_KEY'|'CUSTOMER_MANAGED_KEY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

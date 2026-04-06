<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KeyId
 * @property 'AWS_OWNED_KEY'|'CUSTOMER_MANAGED_KEY' $KeyType
 */
class ApplicationEncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     KeyId?: string|null,
     *     KeyType: 'AWS_OWNED_KEY'|'CUSTOMER_MANAGED_KEY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

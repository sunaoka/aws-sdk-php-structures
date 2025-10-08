<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KeyIdUpdate
 * @property 'AWS_OWNED_KEY'|'CUSTOMER_MANAGED_KEY' $KeyTypeUpdate
 */
class ApplicationEncryptionConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     KeyIdUpdate?: string|null,
     *     KeyTypeUpdate: 'AWS_OWNED_KEY'|'CUSTOMER_MANAGED_KEY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

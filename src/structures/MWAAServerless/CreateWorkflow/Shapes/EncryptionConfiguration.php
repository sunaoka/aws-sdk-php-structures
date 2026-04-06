<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\CreateWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_MANAGED_KEY'|'CUSTOMER_MANAGED_KEY' $Type
 * @property string|null $KmsKeyId
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     Type: 'AWS_MANAGED_KEY'|'CUSTOMER_MANAGED_KEY',
     *     KmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

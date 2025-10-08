<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\SetTokenVaultCMK\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CustomerManagedKey'|'ServiceManagedKey' $keyType
 * @property string|null $kmsKeyArn
 */
class KmsConfiguration extends Shape
{
    /**
     * @param array{
     *     keyType: 'CustomerManagedKey'|'ServiceManagedKey',
     *     kmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateAgentInsightStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_OWNED_KMS_KEY'|'CUSTOMER_MANAGED_KMS' $mode
 * @property string|null $kmsKeyArn
 */
class AgentInsightStoreEncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     mode: 'AWS_OWNED_KMS_KEY'|'CUSTOMER_MANAGED_KMS',
     *     kmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

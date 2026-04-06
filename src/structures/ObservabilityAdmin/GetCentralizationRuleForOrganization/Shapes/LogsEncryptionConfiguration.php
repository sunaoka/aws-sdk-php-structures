<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetCentralizationRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CUSTOMER_MANAGED'|'AWS_OWNED' $EncryptionStrategy
 * @property string|null $KmsKeyArn
 * @property 'ALLOW'|'SKIP'|null $EncryptionConflictResolutionStrategy
 */
class LogsEncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     EncryptionStrategy: 'CUSTOMER_MANAGED'|'AWS_OWNED',
     *     KmsKeyArn?: string|null,
     *     EncryptionConflictResolutionStrategy?: 'ALLOW'|'SKIP'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

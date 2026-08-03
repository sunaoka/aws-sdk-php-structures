<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\UpdateCentralizationRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CUSTOMER_MANAGED'|'AWS_OWNED' $EncryptionStrategy
 * @property string|null $KmsKeyArn
 * @property 'ALLOW'|'SKIP'|null $EncryptionConflictResolutionStrategy
 * @property 'ENCRYPTED_SOURCE_ONLY'|'NEW_DESTINATION_LOG_GROUPS'|null $EncryptionScope
 */
class LogsEncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     EncryptionStrategy: 'CUSTOMER_MANAGED'|'AWS_OWNED',
     *     KmsKeyArn?: string|null,
     *     EncryptionConflictResolutionStrategy?: 'ALLOW'|'SKIP'|null,
     *     EncryptionScope?: 'ENCRYPTED_SOURCE_ONLY'|'NEW_DESTINATION_LOG_GROUPS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

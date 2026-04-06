<?php

namespace Sunaoka\Aws\Structures\DSQL\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_OWNED_KMS_KEY'|'CUSTOMER_MANAGED_KMS_KEY' $encryptionType
 * @property string|null $kmsKeyArn
 * @property 'ENABLED'|'UPDATING'|'KMS_KEY_INACCESSIBLE'|'ENABLING' $encryptionStatus
 */
class EncryptionDetails extends Shape
{
    /**
     * @param array{
     *     encryptionType: 'AWS_OWNED_KMS_KEY'|'CUSTOMER_MANAGED_KMS_KEY',
     *     kmsKeyArn?: string|null,
     *     encryptionStatus: 'ENABLED'|'UPDATING'|'KMS_KEY_INACCESSIBLE'|'ENABLING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

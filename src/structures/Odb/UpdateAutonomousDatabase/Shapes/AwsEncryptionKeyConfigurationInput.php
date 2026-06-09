<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateAutonomousDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $iamRoleArn
 * @property 'database_ocid'|'compartment_ocid'|'tenant_ocid'|null $externalIdType
 * @property string|null $kmsKeyId
 */
class AwsEncryptionKeyConfigurationInput extends Shape
{
    /**
     * @param array{
     *     iamRoleArn?: string|null,
     *     externalIdType?: 'database_ocid'|'compartment_ocid'|'tenant_ocid'|null,
     *     kmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

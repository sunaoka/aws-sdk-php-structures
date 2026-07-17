<?php

namespace Sunaoka\Aws\Structures\Odb\CreateAutonomousDatabaseWallet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $secretId
 * @property string|null $iamRoleArn
 * @property 'database_ocid'|'compartment_ocid'|'tenant_ocid'|null $externalIdType
 */
class CustomerManagedAwsSecretConfigurationInput extends Shape
{
    /**
     * @param array{
     *     secretId?: string|null,
     *     iamRoleArn?: string|null,
     *     externalIdType?: 'database_ocid'|'compartment_ocid'|'tenant_ocid'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

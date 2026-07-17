<?php

namespace Sunaoka\Aws\Structures\Odb\GetAutonomousDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $iamRoleArn
 * @property string|null $secretId
 * @property 'database_ocid'|'compartment_ocid'|'tenant_ocid'|null $externalIdType
 */
class CustomerManagedAwsSecretConfiguration extends Shape
{
    /**
     * @param array{
     *     iamRoleArn?: string|null,
     *     secretId?: string|null,
     *     externalIdType?: 'database_ocid'|'compartment_ocid'|'tenant_ocid'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

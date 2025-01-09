<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyCacheSecretId
 * @property string $KeyCacheSecretIamArn
 * @property string $Krb5FileContents
 */
class KerberosAuthenticationSettings extends Shape
{
    /**
     * @param array{
     *     KeyCacheSecretId?: string,
     *     KeyCacheSecretIamArn?: string,
     *     Krb5FileContents?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

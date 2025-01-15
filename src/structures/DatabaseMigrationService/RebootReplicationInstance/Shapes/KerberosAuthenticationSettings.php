<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\RebootReplicationInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KeyCacheSecretId
 * @property string|null $KeyCacheSecretIamArn
 * @property string|null $Krb5FileContents
 */
class KerberosAuthenticationSettings extends Shape
{
    /**
     * @param array{
     *     KeyCacheSecretId?: string|null,
     *     KeyCacheSecretIamArn?: string|null,
     *     Krb5FileContents?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

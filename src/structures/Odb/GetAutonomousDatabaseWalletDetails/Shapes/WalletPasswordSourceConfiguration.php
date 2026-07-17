<?php

namespace Sunaoka\Aws\Structures\Odb\GetAutonomousDatabaseWalletDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomerManagedAwsSecretConfiguration|null $customerManagedAwsSecret
 */
class WalletPasswordSourceConfiguration extends Shape
{
    /**
     * @param array{customerManagedAwsSecret?: CustomerManagedAwsSecretConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

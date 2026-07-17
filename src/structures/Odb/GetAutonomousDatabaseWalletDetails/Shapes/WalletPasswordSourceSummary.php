<?php

namespace Sunaoka\Aws\Structures\Odb\GetAutonomousDatabaseWalletDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CUSTOMER_MANAGED_AWS_SECRET'|'API_REQUEST_PARAMETER'|null $passwordSource
 * @property WalletPasswordSourceConfiguration|null $passwordSourceConfiguration
 */
class WalletPasswordSourceSummary extends Shape
{
    /**
     * @param array{
     *     passwordSource?: 'CUSTOMER_MANAGED_AWS_SECRET'|'API_REQUEST_PARAMETER'|null,
     *     passwordSourceConfiguration?: WalletPasswordSourceConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

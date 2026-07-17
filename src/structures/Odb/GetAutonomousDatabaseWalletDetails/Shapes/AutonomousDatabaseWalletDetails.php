<?php

namespace Sunaoka\Aws\Structures\Odb\GetAutonomousDatabaseWalletDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'UPDATING'|null $status
 * @property \Aws\Api\DateTimeResult|null $timeRotated
 * @property WalletPasswordSourceSummary|null $passwordSourceSummary
 */
class AutonomousDatabaseWalletDetails extends Shape
{
    /**
     * @param array{
     *     status?: 'ACTIVE'|'UPDATING'|null,
     *     timeRotated?: \Aws\Api\DateTimeResult|null,
     *     passwordSourceSummary?: WalletPasswordSourceSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

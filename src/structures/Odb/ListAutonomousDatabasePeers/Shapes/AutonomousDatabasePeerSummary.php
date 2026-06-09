<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabasePeers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $autonomousDatabaseId
 * @property string|null $autonomousDatabaseArn
 * @property string|null $ocid
 * @property string|null $region
 */
class AutonomousDatabasePeerSummary extends Shape
{
    /**
     * @param array{
     *     autonomousDatabaseId?: string|null,
     *     autonomousDatabaseArn?: string|null,
     *     ocid?: string|null,
     *     region?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

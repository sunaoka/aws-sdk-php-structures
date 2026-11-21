<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabaseRefreshableClones\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $autonomousDatabaseId
 * @property string|null $autonomousDatabaseArn
 * @property string|null $ocid
 * @property string|null $region
 */
class AutonomousDatabaseRefreshableCloneSummary extends Shape
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

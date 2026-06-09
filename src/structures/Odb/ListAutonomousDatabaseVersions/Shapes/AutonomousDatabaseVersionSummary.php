<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabaseVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OLTP'|'AJD'|'APEX'|'LH'|null $dbWorkload
 * @property string|null $details
 * @property string|null $version
 */
class AutonomousDatabaseVersionSummary extends Shape
{
    /**
     * @param array{
     *     dbWorkload?: 'OLTP'|'AJD'|'APEX'|'LH'|null,
     *     details?: string|null,
     *     version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

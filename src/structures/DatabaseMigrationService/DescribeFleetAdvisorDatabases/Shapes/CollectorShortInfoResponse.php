<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CollectorReferencedId
 * @property string $CollectorName
 */
class CollectorShortInfoResponse extends Shape
{
    /**
     * @param array{
     *     CollectorReferencedId?: string,
     *     CollectorName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

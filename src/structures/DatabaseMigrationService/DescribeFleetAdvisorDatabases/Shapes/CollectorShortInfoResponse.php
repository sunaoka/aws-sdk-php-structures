<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CollectorReferencedId
 * @property string|null $CollectorName
 */
class CollectorShortInfoResponse extends Shape
{
    /**
     * @param array{
     *     CollectorReferencedId?: string|null,
     *     CollectorName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

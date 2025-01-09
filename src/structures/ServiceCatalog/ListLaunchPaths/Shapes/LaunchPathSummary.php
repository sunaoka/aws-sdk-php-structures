<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListLaunchPaths\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property list<ConstraintSummary> $ConstraintSummaries
 * @property list<Tag> $Tags
 * @property string $Name
 */
class LaunchPathSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     ConstraintSummaries?: list<ConstraintSummary>,
     *     Tags?: list<Tag>,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

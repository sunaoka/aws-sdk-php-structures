<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListLaunchPaths\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property list<ConstraintSummary>|null $ConstraintSummaries
 * @property list<Tag>|null $Tags
 * @property string|null $Name
 */
class LaunchPathSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     ConstraintSummaries?: list<ConstraintSummary>|null,
     *     Tags?: list<Tag>|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageBuildVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $errorMessage
 * @property list<RegionFailure>|null $regionFailures
 */
class DistributionFailureContext extends Shape
{
    /**
     * @param array{
     *     errorMessage?: string|null,
     *     regionFailures?: list<RegionFailure>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

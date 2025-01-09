<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetGeneratedPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cloudTrailArn
 * @property list<string> $regions
 * @property bool $allRegions
 */
class TrailProperties extends Shape
{
    /**
     * @param array{
     *     cloudTrailArn: string,
     *     regions?: list<string>,
     *     allRegions?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

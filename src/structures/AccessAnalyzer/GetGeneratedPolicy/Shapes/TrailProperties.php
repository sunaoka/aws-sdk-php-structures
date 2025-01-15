<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetGeneratedPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cloudTrailArn
 * @property list<string>|null $regions
 * @property bool|null $allRegions
 */
class TrailProperties extends Shape
{
    /**
     * @param array{
     *     cloudTrailArn: string,
     *     regions?: list<string>|null,
     *     allRegions?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

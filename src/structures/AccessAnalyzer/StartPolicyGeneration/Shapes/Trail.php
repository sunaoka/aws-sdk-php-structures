<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\StartPolicyGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cloudTrailArn
 * @property list<string> $regions
 * @property bool $allRegions
 */
class Trail extends Shape
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

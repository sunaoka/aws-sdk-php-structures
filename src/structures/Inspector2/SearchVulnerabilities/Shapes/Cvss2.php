<?php

namespace Sunaoka\Aws\Structures\Inspector2\SearchVulnerabilities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $baseScore
 * @property string $scoringVector
 */
class Cvss2 extends Shape
{
    /**
     * @param array{
     *     baseScore?: double,
     *     scoringVector?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

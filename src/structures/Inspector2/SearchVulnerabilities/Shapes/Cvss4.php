<?php

namespace Sunaoka\Aws\Structures\Inspector2\SearchVulnerabilities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $baseScore
 * @property string|null $scoringVector
 */
class Cvss4 extends Shape
{
    /**
     * @param array{
     *     baseScore?: double|null,
     *     scoringVector?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

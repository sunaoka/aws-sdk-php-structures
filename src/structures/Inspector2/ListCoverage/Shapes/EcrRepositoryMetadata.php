<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'MANUAL'|'SCAN_ON_PUSH'|'CONTINUOUS_SCAN' $scanFrequency
 */
class EcrRepositoryMetadata extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     scanFrequency?: 'MANUAL'|'SCAN_ON_PUSH'|'CONTINUOUS_SCAN'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

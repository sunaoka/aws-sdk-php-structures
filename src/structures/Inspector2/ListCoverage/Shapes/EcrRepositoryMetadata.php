<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property 'MANUAL'|'SCAN_ON_PUSH'|'CONTINUOUS_SCAN'|null $scanFrequency
 */
class EcrRepositoryMetadata extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     scanFrequency?: 'MANUAL'|'SCAN_ON_PUSH'|'CONTINUOUS_SCAN'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\BatchGetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scanName
 * @property string $findingId
 */
class FindingIdentifier extends Shape
{
    /**
     * @param array{
     *     scanName: string,
     *     findingId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

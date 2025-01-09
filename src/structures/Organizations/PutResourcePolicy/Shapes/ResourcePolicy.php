<?php

namespace Sunaoka\Aws\Structures\Organizations\PutResourcePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourcePolicySummary $ResourcePolicySummary
 * @property string $Content
 */
class ResourcePolicy extends Shape
{
    /**
     * @param array{
     *     ResourcePolicySummary?: ResourcePolicySummary,
     *     Content?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

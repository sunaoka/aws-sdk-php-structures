<?php

namespace Sunaoka\Aws\Structures\Organizations\PutResourcePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourcePolicySummary|null $ResourcePolicySummary
 * @property string|null $Content
 */
class ResourcePolicy extends Shape
{
    /**
     * @param array{
     *     ResourcePolicySummary?: ResourcePolicySummary|null,
     *     Content?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

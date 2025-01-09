<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 * @property list<PolicyAttachment> $Policies
 */
class PolicyToPath extends Shape
{
    /**
     * @param array{
     *     Path?: string,
     *     Policies?: list<PolicyAttachment>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

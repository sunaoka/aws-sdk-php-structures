<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\LookupPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Path
 * @property list<PolicyAttachment>|null $Policies
 */
class PolicyToPath extends Shape
{
    /**
     * @param array{
     *     Path?: string|null,
     *     Policies?: list<PolicyAttachment>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

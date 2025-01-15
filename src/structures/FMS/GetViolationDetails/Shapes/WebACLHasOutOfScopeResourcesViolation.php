<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WebACLArn
 * @property list<string>|null $OutOfScopeResourceList
 */
class WebACLHasOutOfScopeResourcesViolation extends Shape
{
    /**
     * @param array{
     *     WebACLArn?: string|null,
     *     OutOfScopeResourceList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

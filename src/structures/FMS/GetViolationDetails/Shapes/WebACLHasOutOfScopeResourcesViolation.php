<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WebACLArn
 * @property list<string> $OutOfScopeResourceList
 */
class WebACLHasOutOfScopeResourcesViolation extends Shape
{
    /**
     * @param array{
     *     WebACLArn?: string,
     *     OutOfScopeResourceList?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

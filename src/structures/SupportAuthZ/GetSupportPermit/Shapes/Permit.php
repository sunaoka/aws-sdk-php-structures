<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ\GetSupportPermit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActionSet $actions
 * @property ResourceSet $resources
 * @property list<Condition>|null $conditions
 */
class Permit extends Shape
{
    /**
     * @param array{
     *     actions: ActionSet,
     *     resources: ResourceSet,
     *     conditions?: list<Condition>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DLM\UpdateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MANAGED_CWE' $Type
 * @property EventParameters|null $Parameters
 */
class EventSource extends Shape
{
    /**
     * @param array{
     *     Type: 'MANAGED_CWE',
     *     Parameters?: EventParameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

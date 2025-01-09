<?php

namespace Sunaoka\Aws\Structures\DLM\GetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MANAGED_CWE' $Type
 * @property EventParameters $Parameters
 */
class EventSource extends Shape
{
    /**
     * @param array{
     *     Type: 'MANAGED_CWE',
     *     Parameters?: EventParameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

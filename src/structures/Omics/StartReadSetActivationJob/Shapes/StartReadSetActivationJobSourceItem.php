<?php

namespace Sunaoka\Aws\Structures\Omics\StartReadSetActivationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $readSetId
 */
class StartReadSetActivationJobSourceItem extends Shape
{
    /**
     * @param array{readSetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

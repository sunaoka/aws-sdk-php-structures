<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clientNamespace
 */
class QuickSightConfiguration extends Shape
{
    /**
     * @param array{clientNamespace: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

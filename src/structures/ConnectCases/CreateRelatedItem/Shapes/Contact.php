<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateRelatedItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $contactArn
 */
class Contact extends Shape
{
    /**
     * @param array{contactArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactReferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Arn
 */
class EmailMessageReference extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

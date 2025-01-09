<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property string $Name
 * @property string $Arn
 */
class EventResource extends Shape
{
    /**
     * @param array{
     *     Type?: string,
     *     Name?: string,
     *     Arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

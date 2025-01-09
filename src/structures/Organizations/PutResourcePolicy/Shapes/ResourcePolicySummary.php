<?php

namespace Sunaoka\Aws\Structures\Organizations\PutResourcePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 */
class ResourcePolicySummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

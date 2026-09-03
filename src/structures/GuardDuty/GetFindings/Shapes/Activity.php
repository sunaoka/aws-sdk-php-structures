<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'API_CALL' $Type
 * @property ApiCall|null $Api
 */
class Activity extends Shape
{
    /**
     * @param array{
     *     Type: 'API_CALL',
     *     Api?: ApiCall|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

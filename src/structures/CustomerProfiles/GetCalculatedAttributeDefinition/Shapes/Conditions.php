<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetCalculatedAttributeDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Range $Range
 * @property int<1, 100> $ObjectCount
 * @property Threshold $Threshold
 */
class Conditions extends Shape
{
    /**
     * @param array{
     *     Range?: Range,
     *     ObjectCount?: int<1, 100>,
     *     Threshold?: Threshold
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

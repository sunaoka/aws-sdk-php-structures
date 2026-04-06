<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetCalculatedAttributeDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Range|null $Range
 * @property int<1, 100>|null $ObjectCount
 * @property Threshold|null $Threshold
 */
class Conditions extends Shape
{
    /**
     * @param array{
     *     Range?: Range|null,
     *     ObjectCount?: int<1, 100>|null,
     *     Threshold?: Threshold|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

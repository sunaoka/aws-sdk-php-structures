<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Behavior
 * @property string|null $Policy
 * @property list<string>|null $Entities
 * @property string|null $MaskMode
 */
class ContactLensRedactionConfiguration extends Shape
{
    /**
     * @param array{
     *     Behavior?: string|null,
     *     Policy?: string|null,
     *     Entities?: list<string>|null,
     *     MaskMode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

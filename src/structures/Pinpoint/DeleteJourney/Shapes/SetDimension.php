<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCLUSIVE'|'EXCLUSIVE'|null $DimensionType
 * @property list<string> $Values
 */
class SetDimension extends Shape
{
    /**
     * @param array{
     *     DimensionType?: 'INCLUSIVE'|'EXCLUSIVE'|null,
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

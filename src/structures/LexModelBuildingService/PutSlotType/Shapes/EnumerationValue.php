<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutSlotType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 * @property list<string> $synonyms
 */
class EnumerationValue extends Shape
{
    /**
     * @param array{
     *     value: string,
     *     synonyms?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

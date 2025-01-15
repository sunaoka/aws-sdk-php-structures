<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutSlotType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 * @property list<string>|null $synonyms
 */
class EnumerationValue extends Shape
{
    /**
     * @param array{
     *     value: string,
     *     synonyms?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

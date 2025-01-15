<?php

namespace Sunaoka\Aws\Structures\MTurk\CreateHIT\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property list<string>|null $Values
 * @property list<ParameterMapEntry>|null $MapEntries
 */
class PolicyParameter extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     Values?: list<string>|null,
     *     MapEntries?: list<ParameterMapEntry>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

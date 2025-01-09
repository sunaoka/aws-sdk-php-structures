<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CreateEventDataStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Field
 * @property list<string> $Equals
 * @property list<string> $StartsWith
 * @property list<string> $EndsWith
 * @property list<string> $NotEquals
 * @property list<string> $NotStartsWith
 * @property list<string> $NotEndsWith
 */
class AdvancedFieldSelector extends Shape
{
    /**
     * @param array{
     *     Field: string,
     *     Equals?: list<string>,
     *     StartsWith?: list<string>,
     *     EndsWith?: list<string>,
     *     NotEquals?: list<string>,
     *     NotStartsWith?: list<string>,
     *     NotEndsWith?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ImportTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Delimiter
 * @property list<string>|null $HeaderList
 */
class CsvOptions extends Shape
{
    /**
     * @param array{
     *     Delimiter?: string|null,
     *     HeaderList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

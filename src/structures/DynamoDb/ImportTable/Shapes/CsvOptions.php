<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ImportTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Delimiter
 * @property list<string> $HeaderList
 */
class CsvOptions extends Shape
{
    /**
     * @param array{
     *     Delimiter?: string,
     *     HeaderList?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

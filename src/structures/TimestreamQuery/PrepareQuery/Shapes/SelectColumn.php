<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\PrepareQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property Type $Type
 * @property string $DatabaseName
 * @property string $TableName
 * @property bool $Aliased
 */
class SelectColumn extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Type?: Type,
     *     DatabaseName?: string,
     *     TableName?: string,
     *     Aliased?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\PrepareQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property Type|null $Type
 * @property string|null $DatabaseName
 * @property string|null $TableName
 * @property bool|null $Aliased
 */
class SelectColumn extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Type?: Type|null,
     *     DatabaseName?: string|null,
     *     TableName?: string|null,
     *     Aliased?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

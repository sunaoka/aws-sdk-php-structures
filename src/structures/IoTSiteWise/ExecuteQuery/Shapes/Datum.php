<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ExecuteQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $scalarValue
 * @property list<Datum>|null $arrayValue
 * @property Row|null $rowValue
 * @property bool|null $nullValue
 */
class Datum extends Shape
{
    /**
     * @param array{
     *     scalarValue?: string|null,
     *     arrayValue?: list<Datum>|null,
     *     rowValue?: Row|null,
     *     nullValue?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

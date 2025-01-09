<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ExecuteQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scalarValue
 * @property list<Datum> $arrayValue
 * @property Row $rowValue
 * @property bool $nullValue
 */
class Datum extends Shape
{
    /**
     * @param array{
     *     scalarValue?: string,
     *     arrayValue?: list<Datum>,
     *     rowValue?: Row,
     *     nullValue?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

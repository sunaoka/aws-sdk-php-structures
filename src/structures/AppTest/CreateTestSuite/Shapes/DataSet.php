<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PS' $type
 * @property string $name
 * @property string $ccsid
 * @property 'FIXED'|'VARIABLE'|'LINE_SEQUENTIAL' $format
 * @property int $length
 */
class DataSet extends Shape
{
    /**
     * @param array{
     *     type: 'PS',
     *     name: string,
     *     ccsid: string,
     *     format: 'FIXED'|'VARIABLE'|'LINE_SEQUENTIAL',
     *     length: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'Datetime'|'Number'|'String' $Type
 * @property DatetimeOptions|null $DatetimeOptions
 * @property bool|null $CreateColumn
 * @property FilterExpression|null $Filter
 */
class DatasetParameter extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'Datetime'|'Number'|'String',
     *     DatetimeOptions?: DatetimeOptions|null,
     *     CreateColumn?: bool|null,
     *     Filter?: FilterExpression|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'Datetime'|'Number'|'String' $Type
 * @property DatetimeOptions $DatetimeOptions
 * @property bool $CreateColumn
 * @property FilterExpression $Filter
 */
class DatasetParameter extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'Datetime'|'Number'|'String',
     *     DatetimeOptions?: DatetimeOptions,
     *     CreateColumn?: bool,
     *     Filter?: FilterExpression
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

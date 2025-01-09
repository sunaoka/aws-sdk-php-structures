<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Format
 * @property string $TimezoneOffset
 * @property string $LocaleCode
 */
class DatetimeOptions extends Shape
{
    /**
     * @param array{
     *     Format: string,
     *     TimezoneOffset?: string,
     *     LocaleCode?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

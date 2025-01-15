<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Format
 * @property string|null $TimezoneOffset
 * @property string|null $LocaleCode
 */
class DatetimeOptions extends Shape
{
    /**
     * @param array{
     *     Format: string,
     *     TimezoneOffset?: string|null,
     *     LocaleCode?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

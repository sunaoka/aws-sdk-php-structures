<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Begin
 * @property string $End
 */
class DatetimeRange extends Shape
{
    /**
     * @param array{
     *     Begin: string,
     *     End?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

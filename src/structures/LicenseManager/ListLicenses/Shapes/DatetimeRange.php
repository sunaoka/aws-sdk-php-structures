<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Begin
 * @property string|null $End
 */
class DatetimeRange extends Shape
{
    /**
     * @param array{
     *     Begin: string,
     *     End?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

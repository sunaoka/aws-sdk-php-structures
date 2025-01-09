<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListReceivedLicenses\Shapes;

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

<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AllowEarlyCheckIn
 * @property int $MaxTimeToLiveInMinutes
 */
class BorrowConfiguration extends Shape
{
    /**
     * @param array{
     *     AllowEarlyCheckIn: bool,
     *     MaxTimeToLiveInMinutes: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

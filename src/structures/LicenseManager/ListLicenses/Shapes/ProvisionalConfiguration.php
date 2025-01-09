<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxTimeToLiveInMinutes
 */
class ProvisionalConfiguration extends Shape
{
    /**
     * @param array{MaxTimeToLiveInMinutes: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

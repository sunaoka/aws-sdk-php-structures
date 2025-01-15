<?php

namespace Sunaoka\Aws\Structures\SesV2\GetBlacklistReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RblName
 * @property \Aws\Api\DateTimeResult|null $ListingTime
 * @property string|null $Description
 */
class BlacklistEntry extends Shape
{
    /**
     * @param array{
     *     RblName?: string|null,
     *     ListingTime?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

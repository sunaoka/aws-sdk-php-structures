<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetBlacklistReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RblName
 * @property \Aws\Api\DateTimeResult $ListingTime
 * @property string $Description
 */
class BlacklistEntry extends Shape
{
    /**
     * @param array{
     *     RblName?: string,
     *     ListingTime?: \Aws\Api\DateTimeResult,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

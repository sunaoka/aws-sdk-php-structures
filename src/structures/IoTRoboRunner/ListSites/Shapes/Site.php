<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\ListSites\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $countryCode
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class Site extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name: string,
     *     countryCode: string,
     *     createdAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

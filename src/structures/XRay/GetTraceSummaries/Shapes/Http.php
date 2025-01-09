<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HttpURL
 * @property int $HttpStatus
 * @property string $HttpMethod
 * @property string $UserAgent
 * @property string $ClientIp
 */
class Http extends Shape
{
    /**
     * @param array{
     *     HttpURL?: string,
     *     HttpStatus?: int,
     *     HttpMethod?: string,
     *     UserAgent?: string,
     *     ClientIp?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HttpURL
 * @property int|null $HttpStatus
 * @property string|null $HttpMethod
 * @property string|null $UserAgent
 * @property string|null $ClientIp
 */
class Http extends Shape
{
    /**
     * @param array{
     *     HttpURL?: string|null,
     *     HttpStatus?: int|null,
     *     HttpMethod?: string|null,
     *     UserAgent?: string|null,
     *     ClientIp?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

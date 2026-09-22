<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetContextGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $protocol
 * @property string|null $sourcePort
 * @property string|null $destinationPort
 * @property bool|null $blocked
 * @property string|null $errorCode
 * @property string|null $httpStatusCode
 * @property string|null $httpMethod
 * @property bool|null $serviceInitiated
 * @property EdgeTrafficStats|null $trafficStats
 */
class EdgeProperties extends Shape
{
    /**
     * @param array{
     *     protocol?: string|null,
     *     sourcePort?: string|null,
     *     destinationPort?: string|null,
     *     blocked?: bool|null,
     *     errorCode?: string|null,
     *     httpStatusCode?: string|null,
     *     httpMethod?: string|null,
     *     serviceInitiated?: bool|null,
     *     trafficStats?: EdgeTrafficStats|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $api
 * @property string $apiServiceName
 * @property \Aws\Api\DateTimeResult $firstSeen
 * @property \Aws\Api\DateTimeResult $lastSeen
 */
class ApiCallDetails extends Shape
{
    /**
     * @param array{
     *     api?: string,
     *     apiServiceName?: string,
     *     firstSeen?: \Aws\Api\DateTimeResult,
     *     lastSeen?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

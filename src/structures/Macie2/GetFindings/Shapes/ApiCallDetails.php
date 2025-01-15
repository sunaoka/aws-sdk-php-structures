<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $api
 * @property string|null $apiServiceName
 * @property \Aws\Api\DateTimeResult|null $firstSeen
 * @property \Aws\Api\DateTimeResult|null $lastSeen
 */
class ApiCallDetails extends Shape
{
    /**
     * @param array{
     *     api?: string|null,
     *     apiServiceName?: string|null,
     *     firstSeen?: \Aws\Api\DateTimeResult|null,
     *     lastSeen?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

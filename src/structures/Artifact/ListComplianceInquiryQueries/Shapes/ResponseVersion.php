<?php

namespace Sunaoka\Aws\Structures\Artifact\ListComplianceInquiryQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $responseText
 * @property \Aws\Api\DateTimeResult $timestamp
 */
class ResponseVersion extends Shape
{
    /**
     * @param array{
     *     responseText: string,
     *     timestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

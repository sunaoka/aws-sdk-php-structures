<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\GetChallengeMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $ConnectorArn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class ChallengeMetadata extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     ConnectorArn?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     UpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

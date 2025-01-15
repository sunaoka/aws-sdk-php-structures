<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\ListChallengeMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $ConnectorArn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class ChallengeMetadataSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     ConnectorArn?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

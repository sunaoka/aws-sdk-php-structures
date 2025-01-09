<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProfileArn
 * @property string $ProfileVersion
 * @property string $ProfileName
 * @property string $ProfileDescription
 * @property string $Owner
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class ProfileSummary extends Shape
{
    /**
     * @param array{
     *     ProfileArn?: string,
     *     ProfileVersion?: string,
     *     ProfileName?: string,
     *     ProfileDescription?: string,
     *     Owner?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     UpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

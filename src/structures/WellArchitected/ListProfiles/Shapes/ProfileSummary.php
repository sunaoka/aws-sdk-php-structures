<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProfileArn
 * @property string|null $ProfileVersion
 * @property string|null $ProfileName
 * @property string|null $ProfileDescription
 * @property string|null $Owner
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class ProfileSummary extends Shape
{
    /**
     * @param array{
     *     ProfileArn?: string|null,
     *     ProfileVersion?: string|null,
     *     ProfileName?: string|null,
     *     ProfileDescription?: string|null,
     *     Owner?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

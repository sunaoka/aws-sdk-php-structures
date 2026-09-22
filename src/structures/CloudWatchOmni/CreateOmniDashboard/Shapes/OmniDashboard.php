<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateOmniDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dashboardId
 * @property string $arn
 * @property string $name
 * @property string $body
 * @property string $createdBy
 * @property string|null $description
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class OmniDashboard extends Shape
{
    /**
     * @param array{
     *     dashboardId: string,
     *     arn: string,
     *     name: string,
     *     body: string,
     *     createdBy: string,
     *     description?: string|null,
     *     tags?: array<string, string>|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

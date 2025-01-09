<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListDashboards\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $description
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastUpdateDate
 */
class DashboardSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     description?: string,
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     lastUpdateDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property 'CREATING'|'ACTIVE'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $workspaceName
 */
class ApplicationSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     id: string,
     *     name: string,
     *     status: 'CREATING'|'ACTIVE'|'DELETING',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     workspaceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

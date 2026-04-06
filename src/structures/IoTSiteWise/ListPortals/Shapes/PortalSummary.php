<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListPortals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property string $startUrl
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property \Aws\Api\DateTimeResult|null $lastUpdateDate
 * @property string|null $roleArn
 * @property PortalStatus $status
 */
class PortalSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     description?: string|null,
     *     startUrl: string,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     lastUpdateDate?: \Aws\Api\DateTimeResult|null,
     *     roleArn?: string|null,
     *     status: PortalStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

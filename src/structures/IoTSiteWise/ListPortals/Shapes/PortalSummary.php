<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListPortals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $description
 * @property string $startUrl
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastUpdateDate
 * @property string $roleArn
 * @property PortalStatus $status
 * @property 'SITEWISE_PORTAL_V1'|'SITEWISE_PORTAL_V2' $portalType
 */
class PortalSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     description?: string,
     *     startUrl: string,
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     lastUpdateDate?: \Aws\Api\DateTimeResult,
     *     roleArn?: string,
     *     status: PortalStatus,
     *     portalType?: 'SITEWISE_PORTAL_V1'|'SITEWISE_PORTAL_V2'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

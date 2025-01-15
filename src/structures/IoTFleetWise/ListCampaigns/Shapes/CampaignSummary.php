<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListCampaigns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property string|null $signalCatalogArn
 * @property string|null $targetArn
 * @property 'CREATING'|'WAITING_FOR_APPROVAL'|'RUNNING'|'SUSPENDED'|null $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModificationTime
 */
class CampaignSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     signalCatalogArn?: string|null,
     *     targetArn?: string|null,
     *     status?: 'CREATING'|'WAITING_FOR_APPROVAL'|'RUNNING'|'SUSPENDED'|null,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     lastModificationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListCampaigns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property string $signalCatalogArn
 * @property string $targetArn
 * @property 'CREATING'|'WAITING_FOR_APPROVAL'|'RUNNING'|'SUSPENDED' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModificationTime
 */
class CampaignSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     description?: string,
     *     signalCatalogArn?: string,
     *     targetArn?: string,
     *     status?: 'CREATING'|'WAITING_FOR_APPROVAL'|'RUNNING'|'SUSPENDED',
     *     creationTime: \Aws\Api\DateTimeResult,
     *     lastModificationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

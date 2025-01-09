<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $campaignArn
 * @property string $solutionVersionArn
 * @property int $minProvisionedTPS
 * @property CampaignConfig $campaignConfig
 * @property string $status
 * @property string $failureReason
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property CampaignUpdateSummary $latestCampaignUpdate
 */
class Campaign extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     campaignArn?: string,
     *     solutionVersionArn?: string,
     *     minProvisionedTPS?: int,
     *     campaignConfig?: CampaignConfig,
     *     status?: string,
     *     failureReason?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     latestCampaignUpdate?: CampaignUpdateSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

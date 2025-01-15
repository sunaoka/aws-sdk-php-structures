<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $campaignArn
 * @property string|null $solutionVersionArn
 * @property int<1, max>|null $minProvisionedTPS
 * @property CampaignConfig|null $campaignConfig
 * @property string|null $status
 * @property string|null $failureReason
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property CampaignUpdateSummary|null $latestCampaignUpdate
 */
class Campaign extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     campaignArn?: string|null,
     *     solutionVersionArn?: string|null,
     *     minProvisionedTPS?: int<1, max>|null,
     *     campaignConfig?: CampaignConfig|null,
     *     status?: string|null,
     *     failureReason?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     latestCampaignUpdate?: CampaignUpdateSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

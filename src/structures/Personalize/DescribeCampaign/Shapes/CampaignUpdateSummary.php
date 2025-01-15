<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $solutionVersionArn
 * @property int<1, max>|null $minProvisionedTPS
 * @property CampaignConfig|null $campaignConfig
 * @property string|null $status
 * @property string|null $failureReason
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 */
class CampaignUpdateSummary extends Shape
{
    /**
     * @param array{
     *     solutionVersionArn?: string|null,
     *     minProvisionedTPS?: int<1, max>|null,
     *     campaignConfig?: CampaignConfig|null,
     *     status?: string|null,
     *     failureReason?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Personalize\UpdateCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $campaignArn
 * @property string $solutionVersionArn
 * @property int<1, max> $minProvisionedTPS
 * @property Shapes\CampaignConfig $campaignConfig
 */
class UpdateCampaignRequest extends Request
{
    /**
     * @param array{
     *     campaignArn: string,
     *     solutionVersionArn?: string,
     *     minProvisionedTPS?: int<1, max>,
     *     campaignConfig?: Shapes\CampaignConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Personalize\UpdateCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $campaignArn
 * @property string|null $solutionVersionArn
 * @property int<1, max>|null $minProvisionedTPS
 * @property Shapes\CampaignConfig|null $campaignConfig
 */
class UpdateCampaignRequest extends Request
{
    /**
     * @param array{
     *     campaignArn: string,
     *     solutionVersionArn?: string|null,
     *     minProvisionedTPS?: int<1, max>|null,
     *     campaignConfig?: Shapes\CampaignConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

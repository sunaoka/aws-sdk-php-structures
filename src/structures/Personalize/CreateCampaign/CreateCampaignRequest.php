<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $solutionVersionArn
 * @property int<1, max>|null $minProvisionedTPS
 * @property Shapes\CampaignConfig|null $campaignConfig
 * @property list<Shapes\Tag>|null $tags
 */
class CreateCampaignRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     solutionVersionArn: string,
     *     minProvisionedTPS?: int<1, max>|null,
     *     campaignConfig?: Shapes\CampaignConfig|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

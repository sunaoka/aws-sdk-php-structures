<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $solutionVersionArn
 * @property int $minProvisionedTPS
 * @property Shapes\CampaignConfig $campaignConfig
 * @property list<Shapes\Tag> $tags
 */
class CreateCampaignRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     solutionVersionArn: string,
     *     minProvisionedTPS?: int,
     *     campaignConfig?: Shapes\CampaignConfig,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

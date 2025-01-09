<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property Shapes\WriteCampaignRequest $WriteCampaignRequest
 */
class CreateCampaignRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     WriteCampaignRequest: Shapes\WriteCampaignRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

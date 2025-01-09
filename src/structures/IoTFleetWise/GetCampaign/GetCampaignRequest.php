<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class GetCampaignRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

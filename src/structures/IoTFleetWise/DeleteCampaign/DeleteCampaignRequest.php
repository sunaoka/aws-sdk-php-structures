<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\DeleteCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteCampaignRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

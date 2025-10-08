<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetUpgradeStatus;

trait GetUpgradeStatusTrait
{
    /**
     * @param GetUpgradeStatusRequest $args
     * @return GetUpgradeStatusResponse
     */
    public function getUpgradeStatus(GetUpgradeStatusRequest $args)
    {
        $result = parent::getUpgradeStatus($args->toArray());
        return new GetUpgradeStatusResponse($result->toArray());
    }
}

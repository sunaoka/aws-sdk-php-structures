<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateSessionData;

trait UpdateSessionDataTrait
{
    /**
     * @param UpdateSessionDataRequest $args
     * @return UpdateSessionDataResponse
     */
    public function updateSessionData(UpdateSessionDataRequest $args)
    {
        $result = parent::updateSessionData($args->toArray());
        return new UpdateSessionDataResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeSenderIds;

trait DescribeSenderIdsTrait
{
    /**
     * @param DescribeSenderIdsRequest $args
     * @return DescribeSenderIdsResponse
     */
    public function describeSenderIds(DescribeSenderIdsRequest $args)
    {
        $result = parent::describeSenderIds($args->toArray());
        return new DescribeSenderIdsResponse($result->toArray());
    }
}

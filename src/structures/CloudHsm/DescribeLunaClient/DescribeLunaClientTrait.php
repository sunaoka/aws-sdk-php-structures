<?php

namespace Sunaoka\Aws\Structures\CloudHsm\DescribeLunaClient;

trait DescribeLunaClientTrait
{
    /**
     * @param DescribeLunaClientRequest $args
     * @return DescribeLunaClientResponse
     */
    public function describeLunaClient(DescribeLunaClientRequest $args)
    {
        $result = parent::describeLunaClient($args->toArray());
        return new DescribeLunaClientResponse($result->toArray());
    }
}

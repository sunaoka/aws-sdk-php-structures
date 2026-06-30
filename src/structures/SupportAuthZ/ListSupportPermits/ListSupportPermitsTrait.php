<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ\ListSupportPermits;

trait ListSupportPermitsTrait
{
    /**
     * @param ListSupportPermitsRequest $args
     * @return ListSupportPermitsResponse
     */
    public function listSupportPermits(ListSupportPermitsRequest $args)
    {
        $result = parent::listSupportPermits($args->toArray());
        return new ListSupportPermitsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudHsm\ListHapgs;

trait ListHapgsTrait
{
    /**
     * @param ListHapgsRequest $args
     * @return ListHapgsResponse
     */
    public function listHapgs(ListHapgsRequest $args)
    {
        $result = parent::listHapgs($args->toArray());
        return new ListHapgsResponse($result->toArray());
    }
}

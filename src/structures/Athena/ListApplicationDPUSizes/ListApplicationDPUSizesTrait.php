<?php

namespace Sunaoka\Aws\Structures\Athena\ListApplicationDPUSizes;

trait ListApplicationDPUSizesTrait
{
    /**
     * @param ListApplicationDPUSizesRequest $args
     * @return ListApplicationDPUSizesResponse
     */
    public function listApplicationDPUSizes(ListApplicationDPUSizesRequest $args)
    {
        $result = parent::listApplicationDPUSizes($args->toArray());
        return new ListApplicationDPUSizesResponse($result->toArray());
    }
}

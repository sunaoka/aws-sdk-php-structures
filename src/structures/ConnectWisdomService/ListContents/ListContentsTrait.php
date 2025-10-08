<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\ListContents;

trait ListContentsTrait
{
    /**
     * @param ListContentsRequest $args
     * @return ListContentsResponse
     */
    public function listContents(ListContentsRequest $args)
    {
        $result = parent::listContents($args->toArray());
        return new ListContentsResponse($result->toArray());
    }
}

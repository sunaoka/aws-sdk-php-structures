<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\ListFragments;

trait ListFragmentsTrait
{
    /**
     * @param ListFragmentsRequest $args
     * @return ListFragmentsResponse
     */
    public function listFragments(ListFragmentsRequest $args)
    {
        $result = parent::listFragments($args->toArray());
        return new ListFragmentsResponse($result->toArray());
    }
}

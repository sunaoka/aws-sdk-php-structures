<?php

namespace Sunaoka\Aws\Structures\Emr\ListReleaseLabels;

trait ListReleaseLabelsTrait
{
    /**
     * @param ListReleaseLabelsRequest $args
     * @return ListReleaseLabelsResponse
     */
    public function listReleaseLabels(ListReleaseLabelsRequest $args)
    {
        $result = parent::listReleaseLabels($args->toArray());
        return new ListReleaseLabelsResponse($result->toArray());
    }
}

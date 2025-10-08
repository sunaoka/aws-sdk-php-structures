<?php

namespace Sunaoka\Aws\Structures\Inspector\AddAttributesToFindings;

trait AddAttributesToFindingsTrait
{
    /**
     * @param AddAttributesToFindingsRequest $args
     * @return AddAttributesToFindingsResponse
     */
    public function addAttributesToFindings(AddAttributesToFindingsRequest $args)
    {
        $result = parent::addAttributesToFindings($args->toArray());
        return new AddAttributesToFindingsResponse($result->toArray());
    }
}

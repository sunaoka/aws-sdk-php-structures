<?php

namespace Sunaoka\Aws\Structures\Inspector\RemoveAttributesFromFindings;

trait RemoveAttributesFromFindingsTrait
{
    /**
     * @param RemoveAttributesFromFindingsRequest $args
     * @return RemoveAttributesFromFindingsResponse
     */
    public function removeAttributesFromFindings(RemoveAttributesFromFindingsRequest $args)
    {
        $result = parent::removeAttributesFromFindings($args->toArray());
        return new RemoveAttributesFromFindingsResponse($result->toArray());
    }
}

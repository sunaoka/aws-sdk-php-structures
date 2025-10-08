<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListAccessPreviewFindings;

trait ListAccessPreviewFindingsTrait
{
    /**
     * @param ListAccessPreviewFindingsRequest $args
     * @return ListAccessPreviewFindingsResponse
     */
    public function listAccessPreviewFindings(ListAccessPreviewFindingsRequest $args)
    {
        $result = parent::listAccessPreviewFindings($args->toArray());
        return new ListAccessPreviewFindingsResponse($result->toArray());
    }
}

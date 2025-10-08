<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\SearchAssociatedTranscripts;

trait SearchAssociatedTranscriptsTrait
{
    /**
     * @param SearchAssociatedTranscriptsRequest $args
     * @return SearchAssociatedTranscriptsResponse
     */
    public function searchAssociatedTranscripts(SearchAssociatedTranscriptsRequest $args)
    {
        $result = parent::searchAssociatedTranscripts($args->toArray());
        return new SearchAssociatedTranscriptsResponse($result->toArray());
    }
}

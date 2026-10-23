<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListIngestionStreams;

trait ListIngestionStreamsTrait
{
    /**
     * @param ListIngestionStreamsRequest $args
     * @return ListIngestionStreamsResponse
     */
    public function listIngestionStreams(ListIngestionStreamsRequest $args)
    {
        $result = parent::listIngestionStreams($args->toArray());
        return new ListIngestionStreamsResponse($result->toArray());
    }
}

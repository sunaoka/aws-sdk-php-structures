<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\ListChallengeMetadata;

trait ListChallengeMetadataTrait
{
    /**
     * @param ListChallengeMetadataRequest $args
     * @return ListChallengeMetadataResponse
     */
    public function listChallengeMetadata(ListChallengeMetadataRequest $args)
    {
        $result = parent::listChallengeMetadata($args->toArray());
        return new ListChallengeMetadataResponse($result->toArray());
    }
}

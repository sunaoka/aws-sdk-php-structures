<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\GetChallengeMetadata;

trait GetChallengeMetadataTrait
{
    /**
     * @param GetChallengeMetadataRequest $args
     * @return GetChallengeMetadataResponse
     */
    public function getChallengeMetadata(GetChallengeMetadataRequest $args)
    {
        $result = parent::getChallengeMetadata($args->toArray());
        return new GetChallengeMetadataResponse($result->toArray());
    }
}

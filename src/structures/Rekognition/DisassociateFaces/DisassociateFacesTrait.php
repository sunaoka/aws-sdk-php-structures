<?php

namespace Sunaoka\Aws\Structures\Rekognition\DisassociateFaces;

trait DisassociateFacesTrait
{
    /**
     * @param DisassociateFacesRequest $args
     * @return DisassociateFacesResponse
     */
    public function disassociateFaces(DisassociateFacesRequest $args)
    {
        $result = parent::disassociateFaces($args->toArray());
        return new DisassociateFacesResponse($result->toArray());
    }
}

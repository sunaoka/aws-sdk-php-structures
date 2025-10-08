<?php

namespace Sunaoka\Aws\Structures\Macie2\GetSensitiveDataOccurrences;

trait GetSensitiveDataOccurrencesTrait
{
    /**
     * @param GetSensitiveDataOccurrencesRequest $args
     * @return GetSensitiveDataOccurrencesResponse
     */
    public function getSensitiveDataOccurrences(GetSensitiveDataOccurrencesRequest $args)
    {
        $result = parent::getSensitiveDataOccurrences($args->toArray());
        return new GetSensitiveDataOccurrencesResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Sns\ListOriginationNumbers;

trait ListOriginationNumbersTrait
{
    /**
     * @param ListOriginationNumbersRequest $args
     * @return ListOriginationNumbersResponse
     */
    public function listOriginationNumbers(ListOriginationNumbersRequest $args)
    {
        $result = parent::listOriginationNumbers($args->toArray());
        return new ListOriginationNumbersResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListOfferings;

trait ListOfferingsTrait
{
    /**
     * @param ListOfferingsRequest $args
     * @return ListOfferingsResponse
     */
    public function listOfferings(ListOfferingsRequest $args)
    {
        $result = parent::listOfferings($args->toArray());
        return new ListOfferingsResponse($result->toArray());
    }
}

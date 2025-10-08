<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\PutWhatsAppBusinessAccountEventDestinations;

trait PutWhatsAppBusinessAccountEventDestinationsTrait
{
    /**
     * @param PutWhatsAppBusinessAccountEventDestinationsRequest $args
     * @return PutWhatsAppBusinessAccountEventDestinationsResponse
     */
    public function putWhatsAppBusinessAccountEventDestinations(PutWhatsAppBusinessAccountEventDestinationsRequest $args)
    {
        $result = parent::putWhatsAppBusinessAccountEventDestinations($args->toArray());
        return new PutWhatsAppBusinessAccountEventDestinationsResponse($result->toArray());
    }
}

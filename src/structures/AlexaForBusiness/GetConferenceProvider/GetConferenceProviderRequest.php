<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetConferenceProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConferenceProviderArn
 */
class GetConferenceProviderRequest extends Request
{
    /**
     * @param array{ConferenceProviderArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

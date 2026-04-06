<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DeleteConferenceProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConferenceProviderArn
 */
class DeleteConferenceProviderRequest extends Request
{
    /**
     * @param array{ConferenceProviderArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

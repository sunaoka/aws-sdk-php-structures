<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\PutConferencePreference;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ConferencePreference $ConferencePreference
 */
class PutConferencePreferenceRequest extends Request
{
    /**
     * @param array{ConferencePreference: Shapes\ConferencePreference} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

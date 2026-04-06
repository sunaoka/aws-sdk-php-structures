<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetConferencePreference\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DefaultConferenceProviderArn
 */
class ConferencePreference extends Shape
{
    /**
     * @param array{DefaultConferenceProviderArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

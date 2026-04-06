<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetConferenceProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Endpoint
 * @property 'SIP'|'SIPS'|'H323' $CommsProtocol
 */
class IPDialIn extends Shape
{
    /**
     * @param array{
     *     Endpoint: string,
     *     CommsProtocol: 'SIP'|'SIPS'|'H323'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

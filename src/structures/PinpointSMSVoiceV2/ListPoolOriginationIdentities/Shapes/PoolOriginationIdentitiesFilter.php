<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ListPoolOriginationIdentities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'iso-country-code'|'number-capability' $Name
 * @property list<string> $Values
 */
class PoolOriginationIdentitiesFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'iso-country-code'|'number-capability',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

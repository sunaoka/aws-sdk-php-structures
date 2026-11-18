<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpnConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 7> $AdditionalKeyExchangeRound
 * @property list<AdditionalKeyExchangeMethodsRequestListValue>|null $KeyExchangeMethods
 * @property 'required'|'optional'|null $Requirement
 */
class VpnAdditionalKeyExchangeRequest extends Shape
{
    /**
     * @param array{
     *     AdditionalKeyExchangeRound: int<1, 7>,
     *     KeyExchangeMethods?: list<AdditionalKeyExchangeMethodsRequestListValue>|null,
     *     Requirement?: 'required'|'optional'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

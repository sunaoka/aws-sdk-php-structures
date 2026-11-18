<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpnConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AdditionalKeyExchangeRound
 * @property list<AdditionalKeyExchangeMethodsListValue>|null $KeyExchangeMethods
 * @property 'required'|'optional'|null $Requirement
 */
class VpnAdditionalKeyExchange extends Shape
{
    /**
     * @param array{
     *     AdditionalKeyExchangeRound?: int|null,
     *     KeyExchangeMethods?: list<AdditionalKeyExchangeMethodsListValue>|null,
     *     Requirement?: 'required'|'optional'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

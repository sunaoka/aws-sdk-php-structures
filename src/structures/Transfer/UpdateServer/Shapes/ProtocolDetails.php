<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PassiveIp
 * @property 'DISABLED'|'ENABLED'|'ENFORCED' $TlsSessionResumptionMode
 * @property 'DEFAULT'|'ENABLE_NO_OP' $SetStatOption
 * @property list<'HTTP'> $As2Transports
 */
class ProtocolDetails extends Shape
{
    /**
     * @param array{
     *     PassiveIp?: string,
     *     TlsSessionResumptionMode?: 'DISABLED'|'ENABLED'|'ENFORCED',
     *     SetStatOption?: 'DEFAULT'|'ENABLE_NO_OP',
     *     As2Transports?: list<'HTTP'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

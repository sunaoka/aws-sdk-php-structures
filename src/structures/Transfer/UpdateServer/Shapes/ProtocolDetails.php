<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PassiveIp
 * @property 'DISABLED'|'ENABLED'|'ENFORCED'|null $TlsSessionResumptionMode
 * @property 'DEFAULT'|'ENABLE_NO_OP'|null $SetStatOption
 * @property list<'HTTP'>|null $As2Transports
 */
class ProtocolDetails extends Shape
{
    /**
     * @param array{
     *     PassiveIp?: string|null,
     *     TlsSessionResumptionMode?: 'DISABLED'|'ENABLED'|'ENFORCED'|null,
     *     SetStatOption?: 'DEFAULT'|'ENABLE_NO_OP'|null,
     *     As2Transports?: list<'HTTP'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ProcessPayment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EC' $kty
 * @property 'P-256'|'P-384'|'P-521' $crv
 * @property string $x
 * @property string $y
 */
class DpopJwk extends Shape
{
    /**
     * @param array{
     *     kty: 'EC',
     *     crv: 'P-256'|'P-384'|'P-521',
     *     x: string,
     *     y: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Issuer
 * @property string $Subject
 * @property string $Audience
 */
class OpenIdConfiguration extends Shape
{
    /**
     * @param array{
     *     Issuer?: string,
     *     Subject?: string,
     *     Audience?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

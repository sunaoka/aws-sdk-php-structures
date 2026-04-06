<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Issuer
 * @property string|null $Subject
 * @property string|null $Audience
 */
class OpenIdConfiguration extends Shape
{
    /**
     * @param array{
     *     Issuer?: string|null,
     *     Subject?: string|null,
     *     Audience?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

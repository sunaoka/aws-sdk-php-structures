<?php

namespace Sunaoka\Aws\Structures\AppSync\GetApiResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $issuer
 * @property string|null $clientId
 * @property int|null $iatTTL
 * @property int|null $authTTL
 */
class OpenIDConnectConfig extends Shape
{
    /**
     * @param array{
     *     issuer: string,
     *     clientId?: string|null,
     *     iatTTL?: int|null,
     *     authTTL?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

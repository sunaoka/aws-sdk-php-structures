<?php

namespace Sunaoka\Aws\Structures\AppSync\ListGraphqlApis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $issuer
 * @property string $clientId
 * @property int $iatTTL
 * @property int $authTTL
 */
class OpenIDConnectConfig extends Shape
{
    /**
     * @param array{
     *     issuer: string,
     *     clientId?: string,
     *     iatTTL?: int,
     *     authTTL?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

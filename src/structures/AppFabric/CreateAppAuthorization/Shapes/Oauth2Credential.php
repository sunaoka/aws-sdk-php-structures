<?php

namespace Sunaoka\Aws\Structures\AppFabric\CreateAppAuthorization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clientId
 * @property string $clientSecret
 */
class Oauth2Credential extends Shape
{
    /**
     * @param array{
     *     clientId: string,
     *     clientSecret: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

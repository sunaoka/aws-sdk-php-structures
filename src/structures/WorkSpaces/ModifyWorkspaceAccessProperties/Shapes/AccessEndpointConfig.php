<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyWorkspaceAccessProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AccessEndpoint> $AccessEndpoints
 * @property list<'PCOIP'>|null $InternetFallbackProtocols
 */
class AccessEndpointConfig extends Shape
{
    /**
     * @param array{
     *     AccessEndpoints: list<AccessEndpoint>,
     *     InternetFallbackProtocols?: list<'PCOIP'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

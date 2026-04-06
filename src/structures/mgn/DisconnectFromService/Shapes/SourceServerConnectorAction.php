<?php

namespace Sunaoka\Aws\Structures\mgn\DisconnectFromService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $credentialsSecretArn
 * @property string|null $connectorArn
 */
class SourceServerConnectorAction extends Shape
{
    /**
     * @param array{
     *     credentialsSecretArn?: string|null,
     *     connectorArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

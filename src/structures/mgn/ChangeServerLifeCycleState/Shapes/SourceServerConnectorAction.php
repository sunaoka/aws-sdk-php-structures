<?php

namespace Sunaoka\Aws\Structures\mgn\ChangeServerLifeCycleState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectorArn
 * @property string $credentialsSecretArn
 */
class SourceServerConnectorAction extends Shape
{
    /**
     * @param array{
     *     connectorArn?: string,
     *     credentialsSecretArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

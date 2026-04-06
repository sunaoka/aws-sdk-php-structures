<?php

namespace Sunaoka\Aws\Structures\mgn\MarkAsArchived\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $connectorArn
 * @property string|null $credentialsSecretArn
 */
class SourceServerConnectorAction extends Shape
{
    /**
     * @param array{
     *     connectorArn?: string|null,
     *     credentialsSecretArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

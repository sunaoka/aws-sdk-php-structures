<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\RegisterWorkspaceDirectory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TenantId
 * @property string $ApplicationConfigSecretArn
 */
class MicrosoftEntraConfig extends Shape
{
    /**
     * @param array{
     *     TenantId?: string,
     *     ApplicationConfigSecretArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

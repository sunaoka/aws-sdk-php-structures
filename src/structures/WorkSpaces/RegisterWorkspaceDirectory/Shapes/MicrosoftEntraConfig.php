<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\RegisterWorkspaceDirectory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TenantId
 * @property string|null $ApplicationConfigSecretArn
 */
class MicrosoftEntraConfig extends Shape
{
    /**
     * @param array{
     *     TenantId?: string|null,
     *     ApplicationConfigSecretArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

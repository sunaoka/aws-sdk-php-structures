<?php

namespace Sunaoka\Aws\Structures\Iam\CreateOpenIDConnectProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceKey
 * @property string|null $TargetKey
 */
class ContextProviderKeyDefinition extends Shape
{
    /**
     * @param array{
     *     SourceKey: string,
     *     TargetKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

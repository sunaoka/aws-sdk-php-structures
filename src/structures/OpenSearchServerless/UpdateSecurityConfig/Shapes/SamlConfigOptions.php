<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateSecurityConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groupAttribute
 * @property string $metadata
 * @property int<5, 720> $sessionTimeout
 * @property string $userAttribute
 */
class SamlConfigOptions extends Shape
{
    /**
     * @param array{
     *     groupAttribute?: string,
     *     metadata: string,
     *     sessionTimeout?: int<5, 720>,
     *     userAttribute?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetSecurityConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groupAttribute
 * @property string $metadata
 * @property int $sessionTimeout
 * @property string $userAttribute
 */
class SamlConfigOptions extends Shape
{
    /**
     * @param array{
     *     groupAttribute?: string,
     *     metadata: string,
     *     sessionTimeout?: int,
     *     userAttribute?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

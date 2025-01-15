<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateSecurityConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $groupAttribute
 * @property string $metadata
 * @property int<5, 720>|null $sessionTimeout
 * @property string|null $userAttribute
 */
class SamlConfigOptions extends Shape
{
    /**
     * @param array{
     *     groupAttribute?: string|null,
     *     metadata: string,
     *     sessionTimeout?: int<5, 720>|null,
     *     userAttribute?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

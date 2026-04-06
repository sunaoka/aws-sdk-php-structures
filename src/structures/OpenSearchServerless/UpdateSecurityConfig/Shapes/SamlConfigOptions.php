<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateSecurityConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $metadata
 * @property string|null $userAttribute
 * @property string|null $groupAttribute
 * @property string|null $openSearchServerlessEntityId
 * @property int<5, 720>|null $sessionTimeout
 */
class SamlConfigOptions extends Shape
{
    /**
     * @param array{
     *     metadata: string,
     *     userAttribute?: string|null,
     *     groupAttribute?: string|null,
     *     openSearchServerlessEntityId?: string|null,
     *     sessionTimeout?: int<5, 720>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

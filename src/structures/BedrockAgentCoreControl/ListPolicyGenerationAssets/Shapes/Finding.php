<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListPolicyGenerationAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VALID'|'INVALID'|'NOT_TRANSLATABLE'|'ALLOW_ALL'|'ALLOW_NONE'|'DENY_ALL'|'DENY_NONE'|null $type
 * @property string|null $description
 */
class Finding extends Shape
{
    /**
     * @param array{
     *     type?: 'VALID'|'INVALID'|'NOT_TRANSLATABLE'|'ALLOW_ALL'|'ALLOW_NONE'|'DENY_ALL'|'DENY_NONE'|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

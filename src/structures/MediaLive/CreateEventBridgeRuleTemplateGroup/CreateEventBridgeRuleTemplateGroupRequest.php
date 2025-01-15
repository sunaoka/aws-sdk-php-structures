<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateEventBridgeRuleTemplateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $Name
 * @property array<string, string>|null $Tags
 */
class CreateEventBridgeRuleTemplateGroupRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Name: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

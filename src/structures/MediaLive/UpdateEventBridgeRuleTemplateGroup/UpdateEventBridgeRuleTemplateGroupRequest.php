<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateEventBridgeRuleTemplateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $Identifier
 */
class UpdateEventBridgeRuleTemplateGroupRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     Identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteEventBridgeRuleTemplateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteEventBridgeRuleTemplateGroupRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

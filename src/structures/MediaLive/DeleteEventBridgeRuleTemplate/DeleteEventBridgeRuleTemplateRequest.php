<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteEventBridgeRuleTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteEventBridgeRuleTemplateRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

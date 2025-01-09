<?php

namespace Sunaoka\Aws\Structures\MediaLive\GetEventBridgeRuleTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetEventBridgeRuleTemplateRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

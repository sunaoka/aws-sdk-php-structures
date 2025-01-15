<?php

namespace Sunaoka\Aws\Structures\CodePipeline\RegisterWebhookWithThirdParty;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $webhookName
 */
class RegisterWebhookWithThirdPartyRequest extends Request
{
    /**
     * @param array{webhookName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

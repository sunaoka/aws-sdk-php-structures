<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteConsentPortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $consentPortalIdentifier
 */
class DeleteConsentPortalRequest extends Request
{
    /**
     * @param array{consentPortalIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

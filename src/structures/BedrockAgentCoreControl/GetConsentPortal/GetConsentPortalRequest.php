<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetConsentPortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $consentPortalIdentifier
 */
class GetConsentPortalRequest extends Request
{
    /**
     * @param array{consentPortalIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

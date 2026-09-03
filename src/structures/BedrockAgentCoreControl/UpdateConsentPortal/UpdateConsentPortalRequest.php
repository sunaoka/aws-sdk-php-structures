<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateConsentPortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $consentPortalIdentifier
 * @property string|null $executionRoleArn
 * @property Shapes\ConsentPortalIdpConfig|null $idpConfig
 * @property string|null $description
 */
class UpdateConsentPortalRequest extends Request
{
    /**
     * @param array{
     *     consentPortalIdentifier: string,
     *     executionRoleArn?: string|null,
     *     idpConfig?: Shapes\ConsentPortalIdpConfig|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

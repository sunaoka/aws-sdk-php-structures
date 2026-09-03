<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetConsentPortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $credentialProviderArn
 * @property list<string> $scopes
 * @property string|null $audience
 */
class ConsentPortalIdpConfig extends Shape
{
    /**
     * @param array{
     *     credentialProviderArn: string,
     *     scopes: list<string>,
     *     audience?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

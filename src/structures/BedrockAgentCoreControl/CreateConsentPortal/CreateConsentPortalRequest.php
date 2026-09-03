<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateConsentPortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $executionRoleArn
 * @property Shapes\ConsentPortalIdpConfig $idpConfig
 * @property string $name
 * @property list<Shapes\ConsentPortalSource> $sources
 * @property string|null $description
 * @property array<string, string>|null $tags
 */
class CreateConsentPortalRequest extends Request
{
    /**
     * @param array{
     *     executionRoleArn: string,
     *     idpConfig: Shapes\ConsentPortalIdpConfig,
     *     name: string,
     *     sources: list<Shapes\ConsentPortalSource>,
     *     description?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

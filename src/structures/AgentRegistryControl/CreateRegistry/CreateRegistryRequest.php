<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\CreateRegistry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 * @property Shapes\DiscoveryConfiguration|null $discoveryConfiguration
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 * @property Shapes\ApprovalConfiguration|null $approvalConfiguration
 * @property Shapes\AutoDetectionConfiguration|null $autoDetectionConfiguration
 */
class CreateRegistryRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     discoveryConfiguration?: Shapes\DiscoveryConfiguration|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null,
     *     approvalConfiguration?: Shapes\ApprovalConfiguration|null,
     *     autoDetectionConfiguration?: Shapes\AutoDetectionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

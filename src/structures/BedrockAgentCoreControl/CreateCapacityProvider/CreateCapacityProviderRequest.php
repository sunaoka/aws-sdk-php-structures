<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateCapacityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property Shapes\PermissionsConfiguration $permissionsConfiguration
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 * @property Shapes\ComputeConfiguration $computeConfiguration
 */
class CreateCapacityProviderRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     permissionsConfiguration: Shapes\PermissionsConfiguration,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null,
     *     computeConfiguration: Shapes\ComputeConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

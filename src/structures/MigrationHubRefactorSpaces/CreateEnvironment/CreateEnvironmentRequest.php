<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\CreateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string|null $Description
 * @property string $Name
 * @property 'TRANSIT_GATEWAY'|'NONE' $NetworkFabricType
 * @property array<string, string>|null $Tags
 */
class CreateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     Description?: string|null,
     *     Name: string,
     *     NetworkFabricType: 'TRANSIT_GATEWAY'|'NONE',
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

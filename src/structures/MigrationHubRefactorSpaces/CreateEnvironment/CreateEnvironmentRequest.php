<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\CreateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $Description
 * @property string $Name
 * @property 'TRANSIT_GATEWAY'|'NONE' $NetworkFabricType
 * @property array<string, string> $Tags
 */
class CreateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     Description?: string,
     *     Name: string,
     *     NetworkFabricType: 'TRANSIT_GATEWAY'|'NONE',
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

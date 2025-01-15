<?php

namespace Sunaoka\Aws\Structures\EMRContainers\CreateManagedEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $virtualClusterId
 * @property string $type
 * @property string $releaseLabel
 * @property string $executionRoleArn
 * @property string|null $certificateArn
 * @property Shapes\ConfigurationOverrides|null $configurationOverrides
 * @property string $clientToken
 * @property array<string, string>|null $tags
 */
class CreateManagedEndpointRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     virtualClusterId: string,
     *     type: string,
     *     releaseLabel: string,
     *     executionRoleArn: string,
     *     certificateArn?: string|null,
     *     configurationOverrides?: Shapes\ConfigurationOverrides|null,
     *     clientToken: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

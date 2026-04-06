<?php

namespace Sunaoka\Aws\Structures\EMRContainers\CreateSecurityConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $name
 * @property Shapes\ContainerProvider|null $containerProvider
 * @property Shapes\SecurityConfigurationData $securityConfigurationData
 * @property array<string, string>|null $tags
 */
class CreateSecurityConfigurationRequest extends Request
{
    /**
     * @param array{
     *     clientToken: string,
     *     name: string,
     *     containerProvider?: Shapes\ContainerProvider|null,
     *     securityConfigurationData: Shapes\SecurityConfigurationData,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

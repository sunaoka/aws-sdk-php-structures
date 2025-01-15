<?php

namespace Sunaoka\Aws\Structures\EMRContainers\CreateSecurityConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $name
 * @property Shapes\SecurityConfigurationData $securityConfigurationData
 * @property array<string, string>|null $tags
 */
class CreateSecurityConfigurationRequest extends Request
{
    /**
     * @param array{
     *     clientToken: string,
     *     name: string,
     *     securityConfigurationData: Shapes\SecurityConfigurationData,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

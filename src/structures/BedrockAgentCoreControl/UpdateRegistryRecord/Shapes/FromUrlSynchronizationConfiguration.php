<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $url
 * @property list<RegistryRecordCredentialProviderConfiguration>|null $credentialProviderConfigurations
 */
class FromUrlSynchronizationConfiguration extends Shape
{
    /**
     * @param array{
     *     url: string,
     *     credentialProviderConfigurations?: list<RegistryRecordCredentialProviderConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

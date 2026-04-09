<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OAUTH'|'IAM' $credentialProviderType
 * @property RegistryRecordCredentialProviderUnion $credentialProvider
 */
class RegistryRecordCredentialProviderConfiguration extends Shape
{
    /**
     * @param array{
     *     credentialProviderType: 'OAUTH'|'IAM',
     *     credentialProvider: RegistryRecordCredentialProviderUnion
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

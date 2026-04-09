<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RegistryRecordOAuthCredentialProvider|null $oauthCredentialProvider
 * @property RegistryRecordIamCredentialProvider|null $iamCredentialProvider
 */
class RegistryRecordCredentialProviderUnion extends Shape
{
    /**
     * @param array{
     *     oauthCredentialProvider?: RegistryRecordOAuthCredentialProvider|null,
     *     iamCredentialProvider?: RegistryRecordIamCredentialProvider|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

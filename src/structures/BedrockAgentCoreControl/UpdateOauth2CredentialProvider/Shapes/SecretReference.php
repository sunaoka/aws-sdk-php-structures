<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateOauth2CredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $secretId
 * @property string $jsonKey
 */
class SecretReference extends Shape
{
    /**
     * @param array{
     *     secretId: string,
     *     jsonKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

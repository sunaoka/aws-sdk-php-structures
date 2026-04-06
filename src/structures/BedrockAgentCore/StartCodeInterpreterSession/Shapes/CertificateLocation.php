<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartCodeInterpreterSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SecretsManagerLocation|null $secretsManager
 */
class CertificateLocation extends Shape
{
    /**
     * @param array{secretsManager?: SecretsManagerLocation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

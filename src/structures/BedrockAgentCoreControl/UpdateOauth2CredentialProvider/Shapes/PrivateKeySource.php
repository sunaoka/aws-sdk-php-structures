<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateOauth2CredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KmsKeySourceType|null $kmsKeySource
 */
class PrivateKeySource extends Shape
{
    /**
     * @param array{kmsKeySource?: KmsKeySourceType|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

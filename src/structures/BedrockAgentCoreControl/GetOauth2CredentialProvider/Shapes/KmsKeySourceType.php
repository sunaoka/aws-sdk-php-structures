<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetOauth2CredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kmsKeyArn
 */
class KmsKeySourceType extends Shape
{
    /**
     * @param array{kmsKeyArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateOauth2CredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $secretArn
 */
class Secret extends Shape
{
    /**
     * @param array{secretArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

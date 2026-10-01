<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\SynchronizeGatewayTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $secretArn
 */
class SecretsManagerCertificateConfiguration extends Shape
{
    /**
     * @param array{secretArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

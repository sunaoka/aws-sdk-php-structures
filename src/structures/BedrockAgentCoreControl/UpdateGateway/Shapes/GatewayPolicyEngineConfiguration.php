<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property 'LOG_ONLY'|'ENFORCE' $mode
 */
class GatewayPolicyEngineConfiguration extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     mode: 'LOG_ONLY'|'ENFORCE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

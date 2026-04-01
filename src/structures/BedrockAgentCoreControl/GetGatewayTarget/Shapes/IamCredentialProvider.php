<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $service
 * @property string|null $region
 */
class IamCredentialProvider extends Shape
{
    /**
     * @param array{
     *     service: string,
     *     region?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

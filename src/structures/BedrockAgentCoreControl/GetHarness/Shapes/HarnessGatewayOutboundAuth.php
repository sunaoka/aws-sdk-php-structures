<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Unit|null $awsIam
 * @property Unit|null $none
 * @property OAuthCredentialProvider|null $oauth
 */
class HarnessGatewayOutboundAuth extends Shape
{
    /**
     * @param array{
     *     awsIam?: Unit|null,
     *     none?: Unit|null,
     *     oauth?: OAuthCredentialProvider|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

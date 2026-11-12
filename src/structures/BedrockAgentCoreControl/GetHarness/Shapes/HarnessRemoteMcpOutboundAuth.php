<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IamCredentialProvider|null $awsIam
 * @property Unit|null $none
 */
class HarnessRemoteMcpOutboundAuth extends Shape
{
    /**
     * @param array{
     *     awsIam?: IamCredentialProvider|null,
     *     none?: Unit|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

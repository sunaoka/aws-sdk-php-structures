<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPaymentConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $iamRoleArn
 */
class AwsBillingConnectorConfiguration extends Shape
{
    /**
     * @param array{iamRoleArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

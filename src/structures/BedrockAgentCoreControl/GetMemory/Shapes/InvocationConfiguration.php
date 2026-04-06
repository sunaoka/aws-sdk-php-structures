<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $topicArn
 * @property string $payloadDeliveryBucketName
 */
class InvocationConfiguration extends Shape
{
    /**
     * @param array{
     *     topicArn: string,
     *     payloadDeliveryBucketName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

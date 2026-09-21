<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property int<1, 900>|null $timeoutSeconds
 * @property 'allow'|'deny'|null $failureMode
 */
class HarnessHookLambdaTarget extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     timeoutSeconds?: int<1, 900>|null,
     *     failureMode?: 'allow'|'deny'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

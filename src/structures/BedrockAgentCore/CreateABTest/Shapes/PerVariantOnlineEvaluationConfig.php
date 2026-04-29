<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\CreateABTest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $onlineEvaluationConfigArn
 */
class PerVariantOnlineEvaluationConfig extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     onlineEvaluationConfigArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

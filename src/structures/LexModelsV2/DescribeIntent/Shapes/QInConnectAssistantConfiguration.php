<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assistantArn
 */
class QInConnectAssistantConfiguration extends Shape
{
    /**
     * @param array{assistantArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\XRay\GetSamplingTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleName
 * @property string $ErrorCode
 * @property string $Message
 */
class UnprocessedStatistics extends Shape
{
    /**
     * @param array{
     *     RuleName?: string,
     *     ErrorCode?: string,
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

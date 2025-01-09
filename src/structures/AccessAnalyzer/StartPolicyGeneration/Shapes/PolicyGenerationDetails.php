<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\StartPolicyGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $principalArn
 */
class PolicyGenerationDetails extends Shape
{
    /**
     * @param array{principalArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

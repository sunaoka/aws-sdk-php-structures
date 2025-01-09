<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetGeneratedPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $isComplete
 * @property string $principalArn
 * @property CloudTrailProperties $cloudTrailProperties
 */
class GeneratedPolicyProperties extends Shape
{
    /**
     * @param array{
     *     isComplete?: bool,
     *     principalArn: string,
     *     cloudTrailProperties?: CloudTrailProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

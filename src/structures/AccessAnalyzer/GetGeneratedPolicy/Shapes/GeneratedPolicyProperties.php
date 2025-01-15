<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetGeneratedPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isComplete
 * @property string $principalArn
 * @property CloudTrailProperties|null $cloudTrailProperties
 */
class GeneratedPolicyProperties extends Shape
{
    /**
     * @param array{
     *     isComplete?: bool|null,
     *     principalArn: string,
     *     cloudTrailProperties?: CloudTrailProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $algorithmArn
 * @property AlgorithmImage|null $algorithmImage
 * @property array<string, string>|null $defaultHyperParameters
 * @property DefaultHyperParameterRanges|null $defaultHyperParameterRanges
 * @property array<string, string>|null $defaultResourceConfig
 * @property string|null $trainingInputMode
 * @property string|null $roleArn
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 */
class Algorithm extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     algorithmArn?: string|null,
     *     algorithmImage?: AlgorithmImage|null,
     *     defaultHyperParameters?: array<string, string>|null,
     *     defaultHyperParameterRanges?: DefaultHyperParameterRanges|null,
     *     defaultResourceConfig?: array<string, string>|null,
     *     trainingInputMode?: string|null,
     *     roleArn?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

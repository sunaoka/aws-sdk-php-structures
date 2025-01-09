<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $algorithmArn
 * @property AlgorithmImage $algorithmImage
 * @property array<string, string> $defaultHyperParameters
 * @property DefaultHyperParameterRanges $defaultHyperParameterRanges
 * @property array<string, string> $defaultResourceConfig
 * @property string $trainingInputMode
 * @property string $roleArn
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 */
class Algorithm extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     algorithmArn?: string,
     *     algorithmImage?: AlgorithmImage,
     *     defaultHyperParameters?: array<string, string>,
     *     defaultHyperParameterRanges?: DefaultHyperParameterRanges,
     *     defaultResourceConfig?: array<string, string>,
     *     trainingInputMode?: string,
     *     roleArn?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

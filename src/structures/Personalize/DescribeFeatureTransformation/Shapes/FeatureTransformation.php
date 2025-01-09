<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeFeatureTransformation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $featureTransformationArn
 * @property array<string, string> $defaultParameters
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property string $status
 */
class FeatureTransformation extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     featureTransformationArn?: string,
     *     defaultParameters?: array<string, string>,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

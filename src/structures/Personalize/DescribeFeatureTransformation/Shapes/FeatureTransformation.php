<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeFeatureTransformation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $featureTransformationArn
 * @property array<string, string>|null $defaultParameters
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property string|null $status
 */
class FeatureTransformation extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     featureTransformationArn?: string|null,
     *     defaultParameters?: array<string, string>|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketAnalyticsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Prefix
 * @property Tag $Tag
 * @property AnalyticsAndOperator $And
 */
class AnalyticsFilter extends Shape
{
    /**
     * @param array{
     *     Prefix?: string,
     *     Tag?: Tag,
     *     And?: AnalyticsAndOperator
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

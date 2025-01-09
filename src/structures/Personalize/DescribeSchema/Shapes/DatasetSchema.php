<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSchema\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $schemaArn
 * @property string $schema
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property 'ECOMMERCE'|'VIDEO_ON_DEMAND' $domain
 */
class DatasetSchema extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     schemaArn?: string,
     *     schema?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     domain?: 'ECOMMERCE'|'VIDEO_ON_DEMAND'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSchema\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $schemaArn
 * @property string|null $schema
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property 'ECOMMERCE'|'VIDEO_ON_DEMAND'|null $domain
 */
class DatasetSchema extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     schemaArn?: string|null,
     *     schema?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     domain?: 'ECOMMERCE'|'VIDEO_ON_DEMAND'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

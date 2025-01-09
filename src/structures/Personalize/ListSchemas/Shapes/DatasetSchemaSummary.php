<?php

namespace Sunaoka\Aws\Structures\Personalize\ListSchemas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $schemaArn
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property 'ECOMMERCE'|'VIDEO_ON_DEMAND' $domain
 */
class DatasetSchemaSummary extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     schemaArn?: string,
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

<?php

namespace Sunaoka\Aws\Structures\Personalize\ListSchemas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $schemaArn
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property 'ECOMMERCE'|'VIDEO_ON_DEMAND'|null $domain
 */
class DatasetSchemaSummary extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     schemaArn?: string|null,
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

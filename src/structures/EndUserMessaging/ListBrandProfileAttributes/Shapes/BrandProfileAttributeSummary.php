<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\ListBrandProfileAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attributeName
 * @property 'TEXT'|'IMAGE'|'DOCUMENT' $attributeType
 * @property string|null $description
 * @property string|null $category
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class BrandProfileAttributeSummary extends Shape
{
    /**
     * @param array{
     *     attributeName: string,
     *     attributeType: 'TEXT'|'IMAGE'|'DOCUMENT',
     *     description?: string|null,
     *     category?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

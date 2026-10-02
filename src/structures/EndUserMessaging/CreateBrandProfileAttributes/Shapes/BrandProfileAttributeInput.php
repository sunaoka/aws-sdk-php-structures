<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\CreateBrandProfileAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attributeName
 * @property 'TEXT'|'IMAGE'|'DOCUMENT' $attributeType
 * @property string|null $attributeValue
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $attachmentBody
 * @property string|null $description
 * @property string|null $category
 */
class BrandProfileAttributeInput extends Shape
{
    /**
     * @param array{
     *     attributeName: string,
     *     attributeType: 'TEXT'|'IMAGE'|'DOCUMENT',
     *     attributeValue?: string|null,
     *     attachmentBody?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     description?: string|null,
     *     category?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

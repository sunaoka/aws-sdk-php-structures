<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\CreateBrandProfileAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attributeName
 * @property 'TEXT'|'IMAGE'|'DOCUMENT' $attributeType
 * @property string|null $mediaDownloadUrl
 */
class BrandProfileAttributeOutput extends Shape
{
    /**
     * @param array{
     *     attributeName: string,
     *     attributeType: 'TEXT'|'IMAGE'|'DOCUMENT',
     *     mediaDownloadUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\UpdateBrandProfileAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $brandProfileId
 * @property string $attributeName
 * @property string|null $attributeValue
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $attachmentBody
 * @property string|null $description
 * @property string|null $category
 */
class UpdateBrandProfileAttributeRequest extends Request
{
    /**
     * @param array{
     *     brandProfileId: string,
     *     attributeName: string,
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

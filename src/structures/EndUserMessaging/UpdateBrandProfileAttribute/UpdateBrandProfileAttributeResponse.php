<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\UpdateBrandProfileAttribute;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $attributeName
 * @property 'TEXT'|'IMAGE'|'DOCUMENT' $attributeType
 * @property string|null $attributeValue
 * @property string|null $description
 * @property string|null $category
 * @property string|null $mediaContentType
 * @property int|null $mediaSizeBytes
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class UpdateBrandProfileAttributeResponse extends Response
{
}

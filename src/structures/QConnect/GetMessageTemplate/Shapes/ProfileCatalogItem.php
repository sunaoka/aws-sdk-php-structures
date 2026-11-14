<?php

namespace Sunaoka\Aws\Structures\QConnect\GetMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $code
 * @property string|null $type
 * @property string|null $category
 * @property string|null $description
 * @property string|null $additionalInformation
 * @property string|null $imageLink
 * @property string|null $link
 * @property string|null $createdAt
 * @property string|null $updatedAt
 * @property string|null $price
 * @property array<string, string>|null $attributes
 */
class ProfileCatalogItem extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     code?: string|null,
     *     type?: string|null,
     *     category?: string|null,
     *     description?: string|null,
     *     additionalInformation?: string|null,
     *     imageLink?: string|null,
     *     link?: string|null,
     *     createdAt?: string|null,
     *     updatedAt?: string|null,
     *     price?: string|null,
     *     attributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

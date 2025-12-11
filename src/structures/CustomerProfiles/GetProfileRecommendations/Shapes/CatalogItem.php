<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetProfileRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Code
 * @property string|null $Type
 * @property string|null $Category
 * @property string|null $Description
 * @property string|null $AdditionalInformation
 * @property string|null $ImageLink
 * @property string|null $Link
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $Price
 * @property array<string, string>|null $Attributes
 */
class CatalogItem extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Code?: string|null,
     *     Type?: string|null,
     *     Category?: string|null,
     *     Description?: string|null,
     *     AdditionalInformation?: string|null,
     *     ImageLink?: string|null,
     *     Link?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Price?: string|null,
     *     Attributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

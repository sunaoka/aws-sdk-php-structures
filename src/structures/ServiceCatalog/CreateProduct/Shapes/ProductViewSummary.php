<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $ProductId
 * @property string|null $Name
 * @property string|null $Owner
 * @property string|null $ShortDescription
 * @property 'CLOUD_FORMATION_TEMPLATE'|'MARKETPLACE'|'TERRAFORM_OPEN_SOURCE'|'TERRAFORM_CLOUD'|'EXTERNAL'|null $Type
 * @property string|null $Distributor
 * @property bool|null $HasDefaultPath
 * @property string|null $SupportEmail
 * @property string|null $SupportDescription
 * @property string|null $SupportUrl
 */
class ProductViewSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     ProductId?: string|null,
     *     Name?: string|null,
     *     Owner?: string|null,
     *     ShortDescription?: string|null,
     *     Type?: 'CLOUD_FORMATION_TEMPLATE'|'MARKETPLACE'|'TERRAFORM_OPEN_SOURCE'|'TERRAFORM_CLOUD'|'EXTERNAL'|null,
     *     Distributor?: string|null,
     *     HasDefaultPath?: bool|null,
     *     SupportEmail?: string|null,
     *     SupportDescription?: string|null,
     *     SupportUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

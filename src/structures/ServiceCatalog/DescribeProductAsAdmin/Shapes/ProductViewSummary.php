<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProductAsAdmin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ProductId
 * @property string $Name
 * @property string $Owner
 * @property string $ShortDescription
 * @property 'CLOUD_FORMATION_TEMPLATE'|'MARKETPLACE'|'TERRAFORM_OPEN_SOURCE'|'TERRAFORM_CLOUD'|'EXTERNAL' $Type
 * @property string $Distributor
 * @property bool $HasDefaultPath
 * @property string $SupportEmail
 * @property string $SupportDescription
 * @property string $SupportUrl
 */
class ProductViewSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     ProductId?: string,
     *     Name?: string,
     *     Owner?: string,
     *     ShortDescription?: string,
     *     Type?: 'CLOUD_FORMATION_TEMPLATE'|'MARKETPLACE'|'TERRAFORM_OPEN_SOURCE'|'TERRAFORM_CLOUD'|'EXTERNAL',
     *     Distributor?: string,
     *     HasDefaultPath?: bool,
     *     SupportEmail?: string,
     *     SupportDescription?: string,
     *     SupportUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

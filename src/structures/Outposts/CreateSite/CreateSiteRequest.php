<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateSite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $Notes
 * @property array<string, string> $Tags
 * @property Shapes\Address $OperatingAddress
 * @property Shapes\Address $ShippingAddress
 * @property Shapes\RackPhysicalProperties $RackPhysicalProperties
 */
class CreateSiteRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     Notes?: string,
     *     Tags?: array<string, string>,
     *     OperatingAddress?: Shapes\Address,
     *     ShippingAddress?: Shapes\Address,
     *     RackPhysicalProperties?: Shapes\RackPhysicalProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

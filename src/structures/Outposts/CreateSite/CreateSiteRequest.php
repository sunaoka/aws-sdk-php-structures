<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateSite;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string|null $Notes
 * @property array<string, string>|null $Tags
 * @property Shapes\Address|null $OperatingAddress
 * @property Shapes\Address|null $ShippingAddress
 * @property Shapes\RackPhysicalProperties|null $RackPhysicalProperties
 */
class CreateSiteRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     Notes?: string|null,
     *     Tags?: array<string, string>|null,
     *     OperatingAddress?: Shapes\Address|null,
     *     ShippingAddress?: Shapes\Address|null,
     *     RackPhysicalProperties?: Shapes\RackPhysicalProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

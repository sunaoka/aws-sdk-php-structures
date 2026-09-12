<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListProcurementPortals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PortalIdentifier
 * @property 'SAP_BUSINESS_NETWORK'|'COUPA' $PortalName
 * @property string|null $PortalDisplayName
 * @property FeatureConfigurations|null $DefaultFeatureConfigurations
 */
class ProcurementPortal extends Shape
{
    /**
     * @param array{
     *     PortalIdentifier: string,
     *     PortalName: 'SAP_BUSINESS_NETWORK'|'COUPA',
     *     PortalDisplayName?: string|null,
     *     DefaultFeatureConfigurations?: FeatureConfigurations|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

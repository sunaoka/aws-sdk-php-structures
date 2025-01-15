<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property 'SUCCESS'|'REGISTRATION_FAILED'|'REFRESH_FAILED'|'REGISTERING'|'DELETING'|null $DiscoveryStatus
 * @property 'HANA'|'SAP_ABAP'|null $Type
 * @property string|null $Arn
 * @property array<string, string>|null $Tags
 */
class ApplicationSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     DiscoveryStatus?: 'SUCCESS'|'REGISTRATION_FAILED'|'REFRESH_FAILED'|'REGISTERING'|'DELETING'|null,
     *     Type?: 'HANA'|'SAP_ABAP'|null,
     *     Arn?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'SUCCESS'|'REGISTRATION_FAILED'|'REFRESH_FAILED'|'REGISTERING'|'DELETING' $DiscoveryStatus
 * @property 'HANA'|'SAP_ABAP' $Type
 * @property string $Arn
 * @property array<string, string> $Tags
 */
class ApplicationSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     DiscoveryStatus?: 'SUCCESS'|'REGISTRATION_FAILED'|'REFRESH_FAILED'|'REGISTERING'|'DELETING',
     *     Type?: 'HANA'|'SAP_ABAP',
     *     Arn?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

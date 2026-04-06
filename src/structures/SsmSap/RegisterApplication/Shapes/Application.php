<?php

namespace Sunaoka\Aws\Structures\SsmSap\RegisterApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property 'HANA'|'SAP_ABAP'|null $Type
 * @property string|null $Arn
 * @property string|null $AppRegistryArn
 * @property 'ACTIVATED'|'STARTING'|'STOPPED'|'STOPPING'|'FAILED'|'REGISTERING'|'DELETING'|'UNKNOWN'|null $Status
 * @property 'SUCCESS'|'REGISTRATION_FAILED'|'REFRESH_FAILED'|'REGISTERING'|'DELETING'|null $DiscoveryStatus
 * @property list<string>|null $Components
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property string|null $StatusMessage
 * @property list<string>|null $AssociatedApplicationArns
 */
class Application extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Type?: 'HANA'|'SAP_ABAP'|null,
     *     Arn?: string|null,
     *     AppRegistryArn?: string|null,
     *     Status?: 'ACTIVATED'|'STARTING'|'STOPPED'|'STOPPING'|'FAILED'|'REGISTERING'|'DELETING'|'UNKNOWN'|null,
     *     DiscoveryStatus?: 'SUCCESS'|'REGISTRATION_FAILED'|'REFRESH_FAILED'|'REGISTERING'|'DELETING'|null,
     *     Components?: list<string>|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     StatusMessage?: string|null,
     *     AssociatedApplicationArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

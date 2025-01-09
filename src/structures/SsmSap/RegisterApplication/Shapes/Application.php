<?php

namespace Sunaoka\Aws\Structures\SsmSap\RegisterApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'HANA'|'SAP_ABAP' $Type
 * @property string $Arn
 * @property string $AppRegistryArn
 * @property 'ACTIVATED'|'STARTING'|'STOPPED'|'STOPPING'|'FAILED'|'REGISTERING'|'DELETING'|'UNKNOWN' $Status
 * @property 'SUCCESS'|'REGISTRATION_FAILED'|'REFRESH_FAILED'|'REGISTERING'|'DELETING' $DiscoveryStatus
 * @property list<string> $Components
 * @property \Aws\Api\DateTimeResult $LastUpdated
 * @property string $StatusMessage
 * @property list<string> $AssociatedApplicationArns
 */
class Application extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Type?: 'HANA'|'SAP_ABAP',
     *     Arn?: string,
     *     AppRegistryArn?: string,
     *     Status?: 'ACTIVATED'|'STARTING'|'STOPPED'|'STOPPING'|'FAILED'|'REGISTERING'|'DELETING'|'UNKNOWN',
     *     DiscoveryStatus?: 'SUCCESS'|'REGISTRATION_FAILED'|'REFRESH_FAILED'|'REGISTERING'|'DELETING',
     *     Components?: list<string>,
     *     LastUpdated?: \Aws\Api\DateTimeResult,
     *     StatusMessage?: string,
     *     AssociatedApplicationArns?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

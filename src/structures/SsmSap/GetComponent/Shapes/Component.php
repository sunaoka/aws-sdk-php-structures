<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComponentId
 * @property string $Sid
 * @property string $SystemNumber
 * @property string $ParentComponent
 * @property list<string> $ChildComponents
 * @property string $ApplicationId
 * @property 'HANA'|'HANA_NODE'|'ABAP'|'ASCS'|'DIALOG'|'WEBDISP'|'WD'|'ERS' $ComponentType
 * @property 'ACTIVATED'|'STARTING'|'STOPPED'|'STOPPING'|'RUNNING'|'RUNNING_WITH_ERROR'|'UNDEFINED' $Status
 * @property string $SapHostname
 * @property string $SapFeature
 * @property string $SapKernelVersion
 * @property string $HdbVersion
 * @property Resilience $Resilience
 * @property AssociatedHost $AssociatedHost
 * @property list<string> $Databases
 * @property list<Host> $Hosts
 * @property string $PrimaryHost
 * @property DatabaseConnection $DatabaseConnection
 * @property \Aws\Api\DateTimeResult $LastUpdated
 * @property string $Arn
 */
class Component extends Shape
{
    /**
     * @param array{
     *     ComponentId?: string,
     *     Sid?: string,
     *     SystemNumber?: string,
     *     ParentComponent?: string,
     *     ChildComponents?: list<string>,
     *     ApplicationId?: string,
     *     ComponentType?: 'HANA'|'HANA_NODE'|'ABAP'|'ASCS'|'DIALOG'|'WEBDISP'|'WD'|'ERS',
     *     Status?: 'ACTIVATED'|'STARTING'|'STOPPED'|'STOPPING'|'RUNNING'|'RUNNING_WITH_ERROR'|'UNDEFINED',
     *     SapHostname?: string,
     *     SapFeature?: string,
     *     SapKernelVersion?: string,
     *     HdbVersion?: string,
     *     Resilience?: Resilience,
     *     AssociatedHost?: AssociatedHost,
     *     Databases?: list<string>,
     *     Hosts?: list<Host>,
     *     PrimaryHost?: string,
     *     DatabaseConnection?: DatabaseConnection,
     *     LastUpdated?: \Aws\Api\DateTimeResult,
     *     Arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

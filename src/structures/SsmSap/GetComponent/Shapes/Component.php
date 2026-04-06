<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ComponentId
 * @property string|null $Sid
 * @property string|null $SystemNumber
 * @property string|null $ParentComponent
 * @property list<string>|null $ChildComponents
 * @property string|null $ApplicationId
 * @property 'HANA'|'HANA_NODE'|'ABAP'|'ASCS'|'DIALOG'|'WEBDISP'|'WD'|'ERS'|null $ComponentType
 * @property 'ACTIVATED'|'STARTING'|'STOPPED'|'STOPPING'|'RUNNING'|'RUNNING_WITH_ERROR'|'UNDEFINED'|null $Status
 * @property string|null $SapHostname
 * @property string|null $SapFeature
 * @property string|null $SapKernelVersion
 * @property string|null $HdbVersion
 * @property Resilience|null $Resilience
 * @property AssociatedHost|null $AssociatedHost
 * @property list<string>|null $Databases
 * @property list<Host>|null $Hosts
 * @property string|null $PrimaryHost
 * @property DatabaseConnection|null $DatabaseConnection
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property string|null $Arn
 */
class Component extends Shape
{
    /**
     * @param array{
     *     ComponentId?: string|null,
     *     Sid?: string|null,
     *     SystemNumber?: string|null,
     *     ParentComponent?: string|null,
     *     ChildComponents?: list<string>|null,
     *     ApplicationId?: string|null,
     *     ComponentType?: 'HANA'|'HANA_NODE'|'ABAP'|'ASCS'|'DIALOG'|'WEBDISP'|'WD'|'ERS'|null,
     *     Status?: 'ACTIVATED'|'STARTING'|'STOPPED'|'STOPPING'|'RUNNING'|'RUNNING_WITH_ERROR'|'UNDEFINED'|null,
     *     SapHostname?: string|null,
     *     SapFeature?: string|null,
     *     SapKernelVersion?: string|null,
     *     HdbVersion?: string|null,
     *     Resilience?: Resilience|null,
     *     AssociatedHost?: AssociatedHost|null,
     *     Databases?: list<string>|null,
     *     Hosts?: list<Host>|null,
     *     PrimaryHost?: string|null,
     *     DatabaseConnection?: DatabaseConnection|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

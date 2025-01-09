<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseCapacityBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property string $CapacityBlockOfferingId
 * @property 'Linux/UNIX'|'Red Hat Enterprise Linux'|'SUSE Linux'|'Windows'|'Windows with SQL Server'|'Windows with SQL Server Enterprise'|'Windows with SQL Server Standard'|'Windows with SQL Server Web'|'Linux with SQL Server Standard'|'Linux with SQL Server Web'|'Linux with SQL Server Enterprise'|'RHEL with SQL Server Standard'|'RHEL with SQL Server Enterprise'|'RHEL with SQL Server Web'|'RHEL with HA'|'RHEL with HA and SQL Server Standard'|'RHEL with HA and SQL Server Enterprise'|'Ubuntu Pro' $InstancePlatform
 */
class PurchaseCapacityBlockRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     CapacityBlockOfferingId: string,
     *     InstancePlatform: 'Linux/UNIX'|'Red Hat Enterprise Linux'|'SUSE Linux'|'Windows'|'Windows with SQL Server'|'Windows with SQL Server Enterprise'|'Windows with SQL Server Standard'|'Windows with SQL Server Web'|'Linux with SQL Server Standard'|'Linux with SQL Server Web'|'Linux with SQL Server Enterprise'|'RHEL with SQL Server Standard'|'RHEL with SQL Server Enterprise'|'RHEL with SQL Server Web'|'RHEL with HA'|'RHEL with HA and SQL Server Standard'|'RHEL with HA and SQL Server Enterprise'|'Ubuntu Pro'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

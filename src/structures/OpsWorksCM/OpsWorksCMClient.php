<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM;

class OpsWorksCMClient extends \Aws\OpsWorksCM\OpsWorksCMClient
{
    use AssociateNode\AssociateNodeTrait;
    use CreateBackup\CreateBackupTrait;
    use CreateServer\CreateServerTrait;
    use DeleteBackup\DeleteBackupTrait;
    use DeleteServer\DeleteServerTrait;
    use DescribeAccountAttributes\DescribeAccountAttributesTrait;
    use DescribeBackups\DescribeBackupsTrait;
    use DescribeEvents\DescribeEventsTrait;
    use DescribeNodeAssociationStatus\DescribeNodeAssociationStatusTrait;
    use DescribeServers\DescribeServersTrait;
    use DisassociateNode\DisassociateNodeTrait;
    use ExportServerEngineAttribute\ExportServerEngineAttributeTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RestoreServer\RestoreServerTrait;
    use StartMaintenance\StartMaintenanceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateServer\UpdateServerTrait;
    use UpdateServerEngineAttributes\UpdateServerEngineAttributesTrait;
}

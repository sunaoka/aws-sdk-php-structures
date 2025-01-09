<?php

namespace Sunaoka\Aws\Structures\CloudHsm\DescribeHsm;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $HsmArn
 * @property 'PENDING'|'RUNNING'|'UPDATING'|'SUSPENDED'|'TERMINATING'|'TERMINATED'|'DEGRADED' $Status
 * @property string $StatusDetails
 * @property string $AvailabilityZone
 * @property string $EniId
 * @property string $EniIp
 * @property 'PRODUCTION' $SubscriptionType
 * @property string $SubscriptionStartDate
 * @property string $SubscriptionEndDate
 * @property string $VpcId
 * @property string $SubnetId
 * @property string $IamRoleArn
 * @property string $SerialNumber
 * @property string $VendorName
 * @property string $HsmType
 * @property string $SoftwareVersion
 * @property string $SshPublicKey
 * @property string $SshKeyLastUpdated
 * @property string $ServerCertUri
 * @property string $ServerCertLastUpdated
 * @property list<string> $Partitions
 */
class DescribeHsmResponse extends Response
{
}

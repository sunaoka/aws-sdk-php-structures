<?php

namespace Sunaoka\Aws\Structures\CloudHsm\DescribeHsm;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $HsmArn
 * @property 'PENDING'|'RUNNING'|'UPDATING'|'SUSPENDED'|'TERMINATING'|'TERMINATED'|'DEGRADED'|null $Status
 * @property string|null $StatusDetails
 * @property string|null $AvailabilityZone
 * @property string|null $EniId
 * @property string|null $EniIp
 * @property 'PRODUCTION'|null $SubscriptionType
 * @property string|null $SubscriptionStartDate
 * @property string|null $SubscriptionEndDate
 * @property string|null $VpcId
 * @property string|null $SubnetId
 * @property string|null $IamRoleArn
 * @property string|null $SerialNumber
 * @property string|null $VendorName
 * @property string|null $HsmType
 * @property string|null $SoftwareVersion
 * @property string|null $SshPublicKey
 * @property string|null $SshKeyLastUpdated
 * @property string|null $ServerCertUri
 * @property string|null $ServerCertLastUpdated
 * @property list<string>|null $Partitions
 */
class DescribeHsmResponse extends Response
{
}

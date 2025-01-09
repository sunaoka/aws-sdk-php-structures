<?php

namespace Sunaoka\Aws\Structures\CloudHsm\DescribeHapg;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $HapgArn
 * @property string $HapgSerial
 * @property list<string> $HsmsLastActionFailed
 * @property list<string> $HsmsPendingDeletion
 * @property list<string> $HsmsPendingRegistration
 * @property string $Label
 * @property string $LastModifiedTimestamp
 * @property list<string> $PartitionSerialList
 * @property 'READY'|'UPDATING'|'DEGRADED' $State
 */
class DescribeHapgResponse extends Response
{
}

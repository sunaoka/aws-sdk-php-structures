<?php

namespace Sunaoka\Aws\Structures\CloudHsm\DescribeHapg;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $HapgArn
 * @property string|null $HapgSerial
 * @property list<string>|null $HsmsLastActionFailed
 * @property list<string>|null $HsmsPendingDeletion
 * @property list<string>|null $HsmsPendingRegistration
 * @property string|null $Label
 * @property string|null $LastModifiedTimestamp
 * @property list<string>|null $PartitionSerialList
 * @property 'READY'|'UPDATING'|'DEGRADED'|null $State
 */
class DescribeHapgResponse extends Response
{
}

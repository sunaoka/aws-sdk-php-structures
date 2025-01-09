<?php

namespace Sunaoka\Aws\Structures\Ssm\ListInventoryEntries;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TypeName
 * @property string $InstanceId
 * @property string $SchemaVersion
 * @property string $CaptureTime
 * @property list<array<string, string>> $Entries
 * @property string $NextToken
 */
class ListInventoryEntriesResponse extends Response
{
}

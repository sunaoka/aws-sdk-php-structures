<?php

namespace Sunaoka\Aws\Structures\Ssm\ListInventoryEntries;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TypeName
 * @property string|null $InstanceId
 * @property string|null $SchemaVersion
 * @property string|null $CaptureTime
 * @property list<array<string, string>>|null $Entries
 * @property string|null $NextToken
 */
class ListInventoryEntriesResponse extends Response
{
}

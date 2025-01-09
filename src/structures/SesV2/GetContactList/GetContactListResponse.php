<?php

namespace Sunaoka\Aws\Structures\SesV2\GetContactList;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ContactListName
 * @property list<Shapes\Topic> $Topics
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 * @property list<Shapes\Tag> $Tags
 */
class GetContactListResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\SesV2\GetContactList;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ContactListName
 * @property list<Shapes\Topic>|null $Topics
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 * @property list<Shapes\Tag>|null $Tags
 */
class GetContactListResponse extends Response
{
}

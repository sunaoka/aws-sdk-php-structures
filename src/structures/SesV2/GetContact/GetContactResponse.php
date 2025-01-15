<?php

namespace Sunaoka\Aws\Structures\SesV2\GetContact;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ContactListName
 * @property string|null $EmailAddress
 * @property list<Shapes\TopicPreference>|null $TopicPreferences
 * @property list<Shapes\TopicPreference>|null $TopicDefaultPreferences
 * @property bool|null $UnsubscribeAll
 * @property string|null $AttributesData
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 */
class GetContactResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\SesV2\GetContact;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ContactListName
 * @property string $EmailAddress
 * @property list<Shapes\TopicPreference> $TopicPreferences
 * @property list<Shapes\TopicPreference> $TopicDefaultPreferences
 * @property bool $UnsubscribeAll
 * @property string $AttributesData
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 */
class GetContactResponse extends Response
{
}

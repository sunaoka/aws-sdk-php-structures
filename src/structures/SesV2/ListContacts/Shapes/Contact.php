<?php

namespace Sunaoka\Aws\Structures\SesV2\ListContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EmailAddress
 * @property list<TopicPreference>|null $TopicPreferences
 * @property list<TopicPreference>|null $TopicDefaultPreferences
 * @property bool|null $UnsubscribeAll
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 */
class Contact extends Shape
{
    /**
     * @param array{
     *     EmailAddress?: string|null,
     *     TopicPreferences?: list<TopicPreference>|null,
     *     TopicDefaultPreferences?: list<TopicPreference>|null,
     *     UnsubscribeAll?: bool|null,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

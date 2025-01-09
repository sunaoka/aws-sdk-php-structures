<?php

namespace Sunaoka\Aws\Structures\SesV2\ListContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EmailAddress
 * @property list<TopicPreference> $TopicPreferences
 * @property list<TopicPreference> $TopicDefaultPreferences
 * @property bool $UnsubscribeAll
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 */
class Contact extends Shape
{
    /**
     * @param array{
     *     EmailAddress?: string,
     *     TopicPreferences?: list<TopicPreference>,
     *     TopicDefaultPreferences?: list<TopicPreference>,
     *     UnsubscribeAll?: bool,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

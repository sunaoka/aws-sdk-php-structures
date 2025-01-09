<?php

namespace Sunaoka\Aws\Structures\SesV2\UpdateContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactListName
 * @property string $EmailAddress
 * @property list<Shapes\TopicPreference> $TopicPreferences
 * @property bool $UnsubscribeAll
 * @property string $AttributesData
 */
class UpdateContactRequest extends Request
{
    /**
     * @param array{
     *     ContactListName: string,
     *     EmailAddress: string,
     *     TopicPreferences?: list<Shapes\TopicPreference>,
     *     UnsubscribeAll?: bool,
     *     AttributesData?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

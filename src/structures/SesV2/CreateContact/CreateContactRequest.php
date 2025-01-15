<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactListName
 * @property string $EmailAddress
 * @property list<Shapes\TopicPreference>|null $TopicPreferences
 * @property bool|null $UnsubscribeAll
 * @property string|null $AttributesData
 */
class CreateContactRequest extends Request
{
    /**
     * @param array{
     *     ContactListName: string,
     *     EmailAddress: string,
     *     TopicPreferences?: list<Shapes\TopicPreference>|null,
     *     UnsubscribeAll?: bool|null,
     *     AttributesData?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\SearchProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KeyName
 * @property string|null $KeyValue
 * @property string|null $ProfileId
 * @property 'PhoneNumber'|'MobilePhoneNumber'|'HomePhoneNumber'|'BusinessPhoneNumber'|'EmailAddress'|'PersonalEmailAddress'|'BusinessEmailAddress'|null $ContactType
 */
class ContactPreference extends Shape
{
    /**
     * @param array{
     *     KeyName?: string|null,
     *     KeyValue?: string|null,
     *     ProfileId?: string|null,
     *     ContactType?: 'PhoneNumber'|'MobilePhoneNumber'|'HomePhoneNumber'|'BusinessPhoneNumber'|'EmailAddress'|'PersonalEmailAddress'|'BusinessEmailAddress'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

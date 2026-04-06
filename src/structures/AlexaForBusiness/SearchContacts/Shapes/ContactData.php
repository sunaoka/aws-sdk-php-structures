<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContactArn
 * @property string|null $DisplayName
 * @property string|null $FirstName
 * @property string|null $LastName
 * @property string|null $PhoneNumber
 * @property list<PhoneNumber>|null $PhoneNumbers
 * @property list<SipAddress>|null $SipAddresses
 */
class ContactData extends Shape
{
    /**
     * @param array{
     *     ContactArn?: string|null,
     *     DisplayName?: string|null,
     *     FirstName?: string|null,
     *     LastName?: string|null,
     *     PhoneNumber?: string|null,
     *     PhoneNumbers?: list<PhoneNumber>|null,
     *     SipAddresses?: list<SipAddress>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

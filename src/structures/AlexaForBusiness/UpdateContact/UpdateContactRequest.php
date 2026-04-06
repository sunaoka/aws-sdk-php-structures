<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\UpdateContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactArn
 * @property string|null $DisplayName
 * @property string|null $FirstName
 * @property string|null $LastName
 * @property string|null $PhoneNumber
 * @property list<Shapes\PhoneNumber>|null $PhoneNumbers
 * @property list<Shapes\SipAddress>|null $SipAddresses
 */
class UpdateContactRequest extends Request
{
    /**
     * @param array{
     *     ContactArn: string,
     *     DisplayName?: string|null,
     *     FirstName?: string|null,
     *     LastName?: string|null,
     *     PhoneNumber?: string|null,
     *     PhoneNumbers?: list<Shapes\PhoneNumber>|null,
     *     SipAddresses?: list<Shapes\SipAddress>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

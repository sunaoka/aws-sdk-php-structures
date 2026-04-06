<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\CreateContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DisplayName
 * @property string $FirstName
 * @property string|null $LastName
 * @property string|null $PhoneNumber
 * @property list<Shapes\PhoneNumber>|null $PhoneNumbers
 * @property list<Shapes\SipAddress>|null $SipAddresses
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateContactRequest extends Request
{
    /**
     * @param array{
     *     DisplayName?: string|null,
     *     FirstName: string,
     *     LastName?: string|null,
     *     PhoneNumber?: string|null,
     *     PhoneNumbers?: list<Shapes\PhoneNumber>|null,
     *     SipAddresses?: list<Shapes\SipAddress>|null,
     *     ClientRequestToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

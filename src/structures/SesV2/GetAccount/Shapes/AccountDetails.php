<?php

namespace Sunaoka\Aws\Structures\SesV2\GetAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MARKETING'|'TRANSACTIONAL'|null $MailType
 * @property string|null $WebsiteURL
 * @property 'EN'|'JA'|null $ContactLanguage
 * @property string|null $UseCaseDescription
 * @property list<string>|null $AdditionalContactEmailAddresses
 * @property ReviewDetails|null $ReviewDetails
 */
class AccountDetails extends Shape
{
    /**
     * @param array{
     *     MailType?: 'MARKETING'|'TRANSACTIONAL'|null,
     *     WebsiteURL?: string|null,
     *     ContactLanguage?: 'EN'|'JA'|null,
     *     UseCaseDescription?: string|null,
     *     AdditionalContactEmailAddresses?: list<string>|null,
     *     ReviewDetails?: ReviewDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SesV2\GetAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MARKETING'|'TRANSACTIONAL' $MailType
 * @property string $WebsiteURL
 * @property 'EN'|'JA' $ContactLanguage
 * @property string $UseCaseDescription
 * @property list<string> $AdditionalContactEmailAddresses
 * @property ReviewDetails $ReviewDetails
 */
class AccountDetails extends Shape
{
    /**
     * @param array{
     *     MailType?: 'MARKETING'|'TRANSACTIONAL',
     *     WebsiteURL?: string,
     *     ContactLanguage?: 'EN'|'JA',
     *     UseCaseDescription?: string,
     *     AdditionalContactEmailAddresses?: list<string>,
     *     ReviewDetails?: ReviewDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

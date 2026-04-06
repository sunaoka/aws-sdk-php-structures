<?php

namespace Sunaoka\Aws\Structures\SesV2\PutAccountDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'MARKETING'|'TRANSACTIONAL' $MailType
 * @property string $WebsiteURL
 * @property 'EN'|'JA'|null $ContactLanguage
 * @property string|null $UseCaseDescription
 * @property list<string>|null $AdditionalContactEmailAddresses
 * @property bool|null $ProductionAccessEnabled
 */
class PutAccountDetailsRequest extends Request
{
    /**
     * @param array{
     *     MailType: 'MARKETING'|'TRANSACTIONAL',
     *     WebsiteURL: string,
     *     ContactLanguage?: 'EN'|'JA'|null,
     *     UseCaseDescription?: string|null,
     *     AdditionalContactEmailAddresses?: list<string>|null,
     *     ProductionAccessEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

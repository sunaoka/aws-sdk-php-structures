<?php

namespace Sunaoka\Aws\Structures\SesV2\PutAccountDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'MARKETING'|'TRANSACTIONAL' $MailType
 * @property string $WebsiteURL
 * @property 'EN'|'JA' $ContactLanguage
 * @property string $UseCaseDescription
 * @property list<string> $AdditionalContactEmailAddresses
 * @property bool $ProductionAccessEnabled
 */
class PutAccountDetailsRequest extends Request
{
    /**
     * @param array{
     *     MailType: 'MARKETING'|'TRANSACTIONAL',
     *     WebsiteURL: string,
     *     ContactLanguage?: 'EN'|'JA',
     *     UseCaseDescription?: string,
     *     AdditionalContactEmailAddresses?: list<string>,
     *     ProductionAccessEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\PutAllianceLeadContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $Identifier
 * @property Shapes\AllianceLeadContact $AllianceLeadContact
 * @property string|null $EmailVerificationCode
 */
class PutAllianceLeadContactRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Identifier: string,
     *     AllianceLeadContact: Shapes\AllianceLeadContact,
     *     EmailVerificationCode?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateAgreement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AgreementId
 * @property string $ServerId
 * @property string $Description
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property string $LocalProfileId
 * @property string $PartnerProfileId
 * @property string $BaseDirectory
 * @property string $AccessRole
 * @property 'ENABLED'|'DISABLED' $PreserveFilename
 * @property 'ENABLED'|'DISABLED' $EnforceMessageSigning
 */
class UpdateAgreementRequest extends Request
{
    /**
     * @param array{
     *     AgreementId: string,
     *     ServerId: string,
     *     Description?: string,
     *     Status?: 'ACTIVE'|'INACTIVE',
     *     LocalProfileId?: string,
     *     PartnerProfileId?: string,
     *     BaseDirectory?: string,
     *     AccessRole?: string,
     *     PreserveFilename?: 'ENABLED'|'DISABLED',
     *     EnforceMessageSigning?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

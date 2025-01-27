<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateAgreement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AgreementId
 * @property string $ServerId
 * @property string|null $Description
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 * @property string|null $LocalProfileId
 * @property string|null $PartnerProfileId
 * @property string|null $BaseDirectory
 * @property string|null $AccessRole
 * @property 'ENABLED'|'DISABLED'|null $PreserveFilename
 * @property 'ENABLED'|'DISABLED'|null $EnforceMessageSigning
 * @property Shapes\CustomDirectoriesType|null $CustomDirectories
 */
class UpdateAgreementRequest extends Request
{
    /**
     * @param array{
     *     AgreementId: string,
     *     ServerId: string,
     *     Description?: string|null,
     *     Status?: 'ACTIVE'|'INACTIVE'|null,
     *     LocalProfileId?: string|null,
     *     PartnerProfileId?: string|null,
     *     BaseDirectory?: string|null,
     *     AccessRole?: string|null,
     *     PreserveFilename?: 'ENABLED'|'DISABLED'|null,
     *     EnforceMessageSigning?: 'ENABLED'|'DISABLED'|null,
     *     CustomDirectories?: Shapes\CustomDirectoriesType|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

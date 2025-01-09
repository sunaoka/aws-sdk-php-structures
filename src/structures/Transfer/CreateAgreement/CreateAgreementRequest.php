<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateAgreement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $ServerId
 * @property string $LocalProfileId
 * @property string $PartnerProfileId
 * @property string $BaseDirectory
 * @property string $AccessRole
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property list<Shapes\Tag> $Tags
 * @property 'ENABLED'|'DISABLED' $PreserveFilename
 * @property 'ENABLED'|'DISABLED' $EnforceMessageSigning
 */
class CreateAgreementRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     ServerId: string,
     *     LocalProfileId: string,
     *     PartnerProfileId: string,
     *     BaseDirectory: string,
     *     AccessRole: string,
     *     Status?: 'ACTIVE'|'INACTIVE',
     *     Tags?: list<Shapes\Tag>,
     *     PreserveFilename?: 'ENABLED'|'DISABLED',
     *     EnforceMessageSigning?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

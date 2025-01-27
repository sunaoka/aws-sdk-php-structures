<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateAgreement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $ServerId
 * @property string $LocalProfileId
 * @property string $PartnerProfileId
 * @property string|null $BaseDirectory
 * @property string $AccessRole
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 * @property list<Shapes\Tag>|null $Tags
 * @property 'ENABLED'|'DISABLED'|null $PreserveFilename
 * @property 'ENABLED'|'DISABLED'|null $EnforceMessageSigning
 * @property Shapes\CustomDirectoriesType|null $CustomDirectories
 */
class CreateAgreementRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     ServerId: string,
     *     LocalProfileId: string,
     *     PartnerProfileId: string,
     *     BaseDirectory?: string|null,
     *     AccessRole: string,
     *     Status?: 'ACTIVE'|'INACTIVE'|null,
     *     Tags?: list<Shapes\Tag>|null,
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

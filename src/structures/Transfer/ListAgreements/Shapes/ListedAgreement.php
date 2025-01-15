<?php

namespace Sunaoka\Aws\Structures\Transfer\ListAgreements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $AgreementId
 * @property string|null $Description
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 * @property string|null $ServerId
 * @property string|null $LocalProfileId
 * @property string|null $PartnerProfileId
 */
class ListedAgreement extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     AgreementId?: string|null,
     *     Description?: string|null,
     *     Status?: 'ACTIVE'|'INACTIVE'|null,
     *     ServerId?: string|null,
     *     LocalProfileId?: string|null,
     *     PartnerProfileId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

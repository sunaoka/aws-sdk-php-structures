<?php

namespace Sunaoka\Aws\Structures\Transfer\ListAgreements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $AgreementId
 * @property string $Description
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property string $ServerId
 * @property string $LocalProfileId
 * @property string $PartnerProfileId
 */
class ListedAgreement extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     AgreementId?: string,
     *     Description?: string,
     *     Status?: 'ACTIVE'|'INACTIVE',
     *     ServerId?: string,
     *     LocalProfileId?: string,
     *     PartnerProfileId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeAgreement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $AgreementId
 * @property string $Description
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property string $ServerId
 * @property string $LocalProfileId
 * @property string $PartnerProfileId
 * @property string $BaseDirectory
 * @property string $AccessRole
 * @property list<Tag> $Tags
 * @property 'ENABLED'|'DISABLED' $PreserveFilename
 * @property 'ENABLED'|'DISABLED' $EnforceMessageSigning
 */
class DescribedAgreement extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     AgreementId?: string,
     *     Description?: string,
     *     Status?: 'ACTIVE'|'INACTIVE',
     *     ServerId?: string,
     *     LocalProfileId?: string,
     *     PartnerProfileId?: string,
     *     BaseDirectory?: string,
     *     AccessRole?: string,
     *     Tags?: list<Tag>,
     *     PreserveFilename?: 'ENABLED'|'DISABLED',
     *     EnforceMessageSigning?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

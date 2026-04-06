<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeAgreement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string|null $AgreementId
 * @property string|null $Description
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 * @property string|null $ServerId
 * @property string|null $LocalProfileId
 * @property string|null $PartnerProfileId
 * @property string|null $BaseDirectory
 * @property string|null $AccessRole
 * @property list<Tag>|null $Tags
 * @property 'ENABLED'|'DISABLED'|null $PreserveFilename
 * @property 'ENABLED'|'DISABLED'|null $EnforceMessageSigning
 */
class DescribedAgreement extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     AgreementId?: string|null,
     *     Description?: string|null,
     *     Status?: 'ACTIVE'|'INACTIVE'|null,
     *     ServerId?: string|null,
     *     LocalProfileId?: string|null,
     *     PartnerProfileId?: string|null,
     *     BaseDirectory?: string|null,
     *     AccessRole?: string|null,
     *     Tags?: list<Tag>|null,
     *     PreserveFilename?: 'ENABLED'|'DISABLED'|null,
     *     EnforceMessageSigning?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

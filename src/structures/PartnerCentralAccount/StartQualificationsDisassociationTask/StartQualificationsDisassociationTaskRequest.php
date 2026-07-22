<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\StartQualificationsDisassociationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $Identifier
 * @property string|null $ClientToken
 * @property Shapes\QualificationsAssociationPartner $AssociatedPartner
 */
class StartQualificationsDisassociationTaskRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Identifier: string,
     *     ClientToken?: string|null,
     *     AssociatedPartner: Shapes\QualificationsAssociationPartner
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

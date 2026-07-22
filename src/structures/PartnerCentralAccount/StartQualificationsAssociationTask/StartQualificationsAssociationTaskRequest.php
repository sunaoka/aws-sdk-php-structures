<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\StartQualificationsAssociationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $Identifier
 * @property string|null $ClientToken
 * @property Shapes\QualificationsAssociationPartner $PrimaryPartner
 */
class StartQualificationsAssociationTaskRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Identifier: string,
     *     ClientToken?: string|null,
     *     PrimaryPartner: Shapes\QualificationsAssociationPartner
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

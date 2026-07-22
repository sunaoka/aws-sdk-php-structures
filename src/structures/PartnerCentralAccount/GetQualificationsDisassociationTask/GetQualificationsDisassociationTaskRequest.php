<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\GetQualificationsDisassociationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $Identifier
 */
class GetQualificationsDisassociationTaskRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

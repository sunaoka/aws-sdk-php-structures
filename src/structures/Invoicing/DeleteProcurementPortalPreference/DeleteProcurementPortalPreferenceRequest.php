<?php

namespace Sunaoka\Aws\Structures\Invoicing\DeleteProcurementPortalPreference;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProcurementPortalPreferenceArn
 * @property string|null $ClientToken
 */
class DeleteProcurementPortalPreferenceRequest extends Request
{
    /**
     * @param array{
     *     ProcurementPortalPreferenceArn: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

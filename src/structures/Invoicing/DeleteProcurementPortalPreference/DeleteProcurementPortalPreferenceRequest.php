<?php

namespace Sunaoka\Aws\Structures\Invoicing\DeleteProcurementPortalPreference;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProcurementPortalPreferenceArn
 */
class DeleteProcurementPortalPreferenceRequest extends Request
{
    /**
     * @param array{ProcurementPortalPreferenceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

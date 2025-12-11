<?php

namespace Sunaoka\Aws\Structures\Invoicing\GetProcurementPortalPreference;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProcurementPortalPreferenceArn
 */
class GetProcurementPortalPreferenceRequest extends Request
{
    /**
     * @param array{ProcurementPortalPreferenceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

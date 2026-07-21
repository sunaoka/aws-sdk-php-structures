<?php

namespace Sunaoka\Aws\Structures\Invoicing\SendProcurementPortalValidation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProcurementPortalPreferenceArn
 * @property string|null $ClientToken
 */
class SendProcurementPortalValidationRequest extends Request
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

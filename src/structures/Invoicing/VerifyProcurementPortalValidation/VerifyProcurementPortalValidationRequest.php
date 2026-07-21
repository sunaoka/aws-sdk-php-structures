<?php

namespace Sunaoka\Aws\Structures\Invoicing\VerifyProcurementPortalValidation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProcurementPortalPreferenceArn
 * @property string $Code
 * @property string|null $ClientToken
 */
class VerifyProcurementPortalValidationRequest extends Request
{
    /**
     * @param array{
     *     ProcurementPortalPreferenceArn: string,
     *     Code: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

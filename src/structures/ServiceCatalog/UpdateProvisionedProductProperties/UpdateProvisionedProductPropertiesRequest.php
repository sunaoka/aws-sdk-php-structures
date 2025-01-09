<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProvisionedProductProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $ProvisionedProductId
 * @property array<'OWNER'|'LAUNCH_ROLE', string> $ProvisionedProductProperties
 * @property string $IdempotencyToken
 */
class UpdateProvisionedProductPropertiesRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     ProvisionedProductId: string,
     *     ProvisionedProductProperties: array<'OWNER'|'LAUNCH_ROLE', string>,
     *     IdempotencyToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

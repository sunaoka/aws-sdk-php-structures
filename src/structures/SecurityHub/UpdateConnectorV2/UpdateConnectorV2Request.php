<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateConnectorV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorId
 * @property string|null $ClientSecret
 * @property string|null $Description
 * @property Shapes\ProviderUpdateConfiguration|null $Provider
 */
class UpdateConnectorV2Request extends Request
{
    /**
     * @param array{
     *     ConnectorId: string,
     *     ClientSecret?: string|null,
     *     Description?: string|null,
     *     Provider?: Shapes\ProviderUpdateConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

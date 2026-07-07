<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorId
 * @property string|null $Description
 * @property Shapes\CspmProviderUpdateConfiguration|null $Provider
 */
class UpdateConnectorRequest extends Request
{
    /**
     * @param array{
     *     ConnectorId: string,
     *     Description?: string|null,
     *     Provider?: Shapes\CspmProviderUpdateConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

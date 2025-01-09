<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\GetDataIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetDataIntegrationRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Inspector2\DeleteCodeSecurityIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $integrationArn
 */
class DeleteCodeSecurityIntegrationRequest extends Request
{
    /**
     * @param array{integrationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointArn
 */
class DeleteEndpointRequest extends Request
{
    /**
     * @param array{EndpointArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

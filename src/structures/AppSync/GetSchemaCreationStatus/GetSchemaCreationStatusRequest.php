<?php

namespace Sunaoka\Aws\Structures\AppSync\GetSchemaCreationStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 */
class GetSchemaCreationStatusRequest extends Request
{
    /**
     * @param array{apiId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

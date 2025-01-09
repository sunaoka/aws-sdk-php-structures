<?php

namespace Sunaoka\Aws\Structures\AppSync\StartSchemaCreation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $definition
 */
class StartSchemaCreationRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     definition: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

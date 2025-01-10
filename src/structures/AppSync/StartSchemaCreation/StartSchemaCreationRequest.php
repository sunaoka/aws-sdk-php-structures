<?php

namespace Sunaoka\Aws\Structures\AppSync\StartSchemaCreation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string|resource|\Psr\Http\Message\StreamInterface $definition
 */
class StartSchemaCreationRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     definition: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

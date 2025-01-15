<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $name
 * @property string|null $description
 * @property string|null $schema
 * @property string $contentType
 */
class CreateModelRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     name: string,
     *     description?: string|null,
     *     schema?: string|null,
     *     contentType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

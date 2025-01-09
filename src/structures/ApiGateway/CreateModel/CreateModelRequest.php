<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $name
 * @property string $description
 * @property string $schema
 * @property string $contentType
 */
class CreateModelRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     name: string,
     *     description?: string,
     *     schema?: string,
     *     contentType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

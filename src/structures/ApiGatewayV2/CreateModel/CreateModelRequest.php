<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string|null $ContentType
 * @property string|null $Description
 * @property string $Name
 * @property string $Schema
 */
class CreateModelRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     ContentType?: string|null,
     *     Description?: string|null,
     *     Name: string,
     *     Schema: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

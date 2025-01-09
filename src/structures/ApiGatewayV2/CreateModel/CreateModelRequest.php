<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $ContentType
 * @property string $Description
 * @property string $Name
 * @property string $Schema
 */
class CreateModelRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     ContentType?: string,
     *     Description?: string,
     *     Name: string,
     *     Schema: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

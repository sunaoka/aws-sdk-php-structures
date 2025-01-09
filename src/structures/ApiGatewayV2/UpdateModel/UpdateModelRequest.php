<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $ContentType
 * @property string $Description
 * @property string $ModelId
 * @property string $Name
 * @property string $Schema
 */
class UpdateModelRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     ContentType?: string,
     *     Description?: string,
     *     ModelId: string,
     *     Name?: string,
     *     Schema?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

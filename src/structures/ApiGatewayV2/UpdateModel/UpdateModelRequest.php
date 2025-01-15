<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string|null $ContentType
 * @property string|null $Description
 * @property string $ModelId
 * @property string|null $Name
 * @property string|null $Schema
 */
class UpdateModelRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     ContentType?: string|null,
     *     Description?: string|null,
     *     ModelId: string,
     *     Name?: string|null,
     *     Schema?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

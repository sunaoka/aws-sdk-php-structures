<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string $parentId
 * @property string $pathPart
 */
class CreateResourceRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     parentId: string,
     *     pathPart: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDocumentationVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string|null $position
 * @property int|null $limit
 */
class GetDocumentationVersionsRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     position?: string|null,
     *     limit?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

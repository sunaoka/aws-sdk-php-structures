<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateBasePathMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 * @property string $domainNameId
 * @property string $basePath
 * @property list<Shapes\PatchOperation> $patchOperations
 */
class UpdateBasePathMappingRequest extends Request
{
    /**
     * @param array{
     *     domainName: string,
     *     domainNameId?: string,
     *     basePath: string,
     *     patchOperations?: list<Shapes\PatchOperation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateBasePathMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 * @property string|null $domainNameId
 * @property string $basePath
 * @property list<Shapes\PatchOperation>|null $patchOperations
 */
class UpdateBasePathMappingRequest extends Request
{
    /**
     * @param array{
     *     domainName: string,
     *     domainNameId?: string|null,
     *     basePath: string,
     *     patchOperations?: list<Shapes\PatchOperation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

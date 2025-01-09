<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateDomainName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 * @property string $domainNameId
 * @property list<Shapes\PatchOperation> $patchOperations
 */
class UpdateDomainNameRequest extends Request
{
    /**
     * @param array{
     *     domainName: string,
     *     domainNameId?: string,
     *     patchOperations?: list<Shapes\PatchOperation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

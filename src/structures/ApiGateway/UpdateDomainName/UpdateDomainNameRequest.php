<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateDomainName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 * @property string|null $domainNameId
 * @property list<Shapes\PatchOperation>|null $patchOperations
 */
class UpdateDomainNameRequest extends Request
{
    /**
     * @param array{
     *     domainName: string,
     *     domainNameId?: string|null,
     *     patchOperations?: list<Shapes\PatchOperation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

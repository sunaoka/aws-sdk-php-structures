<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateDomainName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 * @property string $description
 */
class UpdateDomainNameRequest extends Request
{
    /**
     * @param array{
     *     domainName: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

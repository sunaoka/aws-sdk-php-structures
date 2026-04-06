<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateDomainName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 * @property string $certificateArn
 * @property string|null $description
 */
class CreateDomainNameRequest extends Request
{
    /**
     * @param array{
     *     domainName: string,
     *     certificateArn: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

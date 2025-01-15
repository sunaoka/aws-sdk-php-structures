<?php

namespace Sunaoka\Aws\Structures\Athena\UpdateNamedQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NamedQueryId
 * @property string $Name
 * @property string|null $Description
 * @property string $QueryString
 */
class UpdateNamedQueryRequest extends Request
{
    /**
     * @param array{
     *     NamedQueryId: string,
     *     Name: string,
     *     Description?: string|null,
     *     QueryString: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

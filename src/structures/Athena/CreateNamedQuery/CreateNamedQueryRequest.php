<?php

namespace Sunaoka\Aws\Structures\Athena\CreateNamedQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string $Database
 * @property string $QueryString
 * @property string|null $ClientRequestToken
 * @property string|null $WorkGroup
 */
class CreateNamedQueryRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     Database: string,
     *     QueryString: string,
     *     ClientRequestToken?: string|null,
     *     WorkGroup?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

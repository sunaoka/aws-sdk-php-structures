<?php

namespace Sunaoka\Aws\Structures\Athena\CreateNamedQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $Database
 * @property string $QueryString
 * @property string $ClientRequestToken
 * @property string $WorkGroup
 */
class CreateNamedQueryRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     Database: string,
     *     QueryString: string,
     *     ClientRequestToken?: string,
     *     WorkGroup?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

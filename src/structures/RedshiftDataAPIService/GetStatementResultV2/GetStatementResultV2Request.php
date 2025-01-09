<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\GetStatementResultV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $NextToken
 */
class GetStatementResultV2Request extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

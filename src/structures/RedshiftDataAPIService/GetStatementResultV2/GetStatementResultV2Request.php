<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\GetStatementResultV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $NextToken
 */
class GetStatementResultV2Request extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

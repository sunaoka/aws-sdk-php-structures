<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\GetStatementResult;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $NextToken
 */
class GetStatementResultRequest extends Request
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

<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\GetStatementResultV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $NextToken
 * @property int<1, 30>|null $WaitTimeSeconds
 */
class GetStatementResultV2Request extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     NextToken?: string|null,
     *     WaitTimeSeconds?: int<1, 30>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

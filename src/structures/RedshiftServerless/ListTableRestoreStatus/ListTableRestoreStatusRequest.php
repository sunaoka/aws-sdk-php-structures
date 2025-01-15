<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListTableRestoreStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $namespaceName
 * @property string|null $nextToken
 * @property string|null $workgroupName
 */
class ListTableRestoreStatusRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     namespaceName?: string|null,
     *     nextToken?: string|null,
     *     workgroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

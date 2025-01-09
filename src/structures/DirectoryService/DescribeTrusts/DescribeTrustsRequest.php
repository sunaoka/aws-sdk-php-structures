<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeTrusts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property list<string> $TrustIds
 * @property string $NextToken
 * @property int<0, max> $Limit
 */
class DescribeTrustsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId?: string,
     *     TrustIds?: list<string>,
     *     NextToken?: string,
     *     Limit?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

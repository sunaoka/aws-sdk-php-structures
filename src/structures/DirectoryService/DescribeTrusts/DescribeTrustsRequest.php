<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeTrusts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property list<string> $TrustIds
 * @property string $NextToken
 * @property int $Limit
 */
class DescribeTrustsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId?: string,
     *     TrustIds?: list<string>,
     *     NextToken?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

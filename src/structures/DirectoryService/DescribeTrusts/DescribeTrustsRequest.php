<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeTrusts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DirectoryId
 * @property list<string>|null $TrustIds
 * @property string|null $NextToken
 * @property int<0, max>|null $Limit
 */
class DescribeTrustsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId?: string|null,
     *     TrustIds?: list<string>|null,
     *     NextToken?: string|null,
     *     Limit?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetCompatibleVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class GetCompatibleVersionsRequest extends Request
{
    /**
     * @param array{DomainName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

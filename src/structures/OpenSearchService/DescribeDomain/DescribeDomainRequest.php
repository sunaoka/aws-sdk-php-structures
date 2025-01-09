<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class DescribeDomainRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

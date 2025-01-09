<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainHealth;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class DescribeDomainHealthRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class DescribeDomainConfigRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

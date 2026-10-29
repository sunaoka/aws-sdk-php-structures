<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class DescribeDomainReplicationRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

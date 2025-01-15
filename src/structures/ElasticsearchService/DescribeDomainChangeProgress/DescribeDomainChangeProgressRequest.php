<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeDomainChangeProgress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string|null $ChangeId
 */
class DescribeDomainChangeProgressRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ChangeId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

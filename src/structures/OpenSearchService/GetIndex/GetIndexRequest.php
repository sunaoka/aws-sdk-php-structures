<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $IndexName
 */
class GetIndexRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     IndexName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $Name
 */
class GetDataSourceRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

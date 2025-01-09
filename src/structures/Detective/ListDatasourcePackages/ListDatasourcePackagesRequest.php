<?php

namespace Sunaoka\Aws\Structures\Detective\ListDatasourcePackages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GraphArn
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListDatasourcePackagesRequest extends Request
{
    /**
     * @param array{
     *     GraphArn: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

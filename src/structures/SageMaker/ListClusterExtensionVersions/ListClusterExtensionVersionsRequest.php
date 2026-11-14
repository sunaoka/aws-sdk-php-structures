<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListClusterExtensionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExtensionName
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListClusterExtensionVersionsRequest extends Request
{
    /**
     * @param array{
     *     ExtensionName: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

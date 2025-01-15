<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListInstanceTypeDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EngineVersion
 * @property string|null $DomainName
 * @property int<min, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $RetrieveAZs
 * @property string|null $InstanceType
 */
class ListInstanceTypeDetailsRequest extends Request
{
    /**
     * @param array{
     *     EngineVersion: string,
     *     DomainName?: string|null,
     *     MaxResults?: int<min, 100>|null,
     *     NextToken?: string|null,
     *     RetrieveAZs?: bool|null,
     *     InstanceType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

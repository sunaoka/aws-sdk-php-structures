<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListInstanceTypeDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EngineVersion
 * @property string $DomainName
 * @property int<min, 100> $MaxResults
 * @property string $NextToken
 * @property bool $RetrieveAZs
 * @property string $InstanceType
 */
class ListInstanceTypeDetailsRequest extends Request
{
    /**
     * @param array{
     *     EngineVersion: string,
     *     DomainName?: string,
     *     MaxResults?: int<min, 100>,
     *     NextToken?: string,
     *     RetrieveAZs?: bool,
     *     InstanceType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

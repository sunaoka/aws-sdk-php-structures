<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListCloudConnectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'LISTED'|'UNLISTED'|null $Type
 * @property string|null $LambdaArn
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListCloudConnectorsRequest extends Request
{
    /**
     * @param array{
     *     Type?: 'LISTED'|'UNLISTED'|null,
     *     LambdaArn?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

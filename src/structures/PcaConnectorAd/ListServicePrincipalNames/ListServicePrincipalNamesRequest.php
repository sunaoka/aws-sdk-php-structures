<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListServicePrincipalNames;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryRegistrationArn
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class ListServicePrincipalNamesRequest extends Request
{
    /**
     * @param array{
     *     DirectoryRegistrationArn: string,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

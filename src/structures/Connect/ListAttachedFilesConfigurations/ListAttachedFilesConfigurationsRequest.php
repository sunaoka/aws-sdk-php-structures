<?php

namespace Sunaoka\Aws\Structures\Connect\ListAttachedFilesConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAttachedFilesConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Kafka\ListScramSecrets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListScramSecretsRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

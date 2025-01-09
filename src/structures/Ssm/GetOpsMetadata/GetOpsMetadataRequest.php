<?php

namespace Sunaoka\Aws\Structures\Ssm\GetOpsMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OpsMetadataArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetOpsMetadataRequest extends Request
{
    /**
     * @param array{
     *     OpsMetadataArn: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

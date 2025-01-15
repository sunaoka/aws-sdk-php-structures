<?php

namespace Sunaoka\Aws\Structures\Ssm\GetOpsMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OpsMetadataArn
 * @property int<1, 10>|null $MaxResults
 * @property string|null $NextToken
 */
class GetOpsMetadataRequest extends Request
{
    /**
     * @param array{
     *     OpsMetadataArn: string,
     *     MaxResults?: int<1, 10>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

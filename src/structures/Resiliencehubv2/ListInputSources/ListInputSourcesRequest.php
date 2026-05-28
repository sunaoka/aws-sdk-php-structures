<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListInputSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 * @property 'CFN_STACK'|'TAGS'|'EKS'|'TERRAFORM'|'DESIGN_FILE'|'MONITORING'|null $type
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListInputSourcesRequest extends Request
{
    /**
     * @param array{
     *     serviceArn: string,
     *     type?: 'CFN_STACK'|'TAGS'|'EKS'|'TERRAFORM'|'DESIGN_FILE'|'MONITORING'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

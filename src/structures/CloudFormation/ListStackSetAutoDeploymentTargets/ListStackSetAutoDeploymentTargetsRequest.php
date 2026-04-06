<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSetAutoDeploymentTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'SELF'|'DELEGATED_ADMIN'|null $CallAs
 */
class ListStackSetAutoDeploymentTargetsRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

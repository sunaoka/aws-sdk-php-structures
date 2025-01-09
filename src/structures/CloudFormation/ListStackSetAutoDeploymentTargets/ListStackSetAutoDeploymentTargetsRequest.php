<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSetAutoDeploymentTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property 'SELF'|'DELEGATED_ADMIN' $CallAs
 */
class ListStackSetAutoDeploymentTargetsRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

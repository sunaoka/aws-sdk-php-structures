<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVerifiedAccessEndpointTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessEndpointId
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class GetVerifiedAccessEndpointTargetsRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessEndpointId: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

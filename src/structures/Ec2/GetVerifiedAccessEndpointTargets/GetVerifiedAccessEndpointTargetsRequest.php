<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVerifiedAccessEndpointTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessEndpointId
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $DryRun
 */
class GetVerifiedAccessEndpointTargetsRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessEndpointId: string,
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

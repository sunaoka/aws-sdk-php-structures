<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListExposuresByRemediationV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetUid
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListExposuresByRemediationV2Request extends Request
{
    /**
     * @param array{
     *     TargetUid: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetThirdPartyJobDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $clientToken
 */
class GetThirdPartyJobDetailsRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

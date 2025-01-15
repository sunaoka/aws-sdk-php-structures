<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteAccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accessPolicyId
 * @property string|null $clientToken
 */
class DeleteAccessPolicyRequest extends Request
{
    /**
     * @param array{
     *     accessPolicyId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

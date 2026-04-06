<?php

namespace Sunaoka\Aws\Structures\CloudTrail\EnableFederation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventDataStore
 * @property string $FederationRoleArn
 */
class EnableFederationRequest extends Request
{
    /**
     * @param array{
     *     EventDataStore: string,
     *     FederationRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

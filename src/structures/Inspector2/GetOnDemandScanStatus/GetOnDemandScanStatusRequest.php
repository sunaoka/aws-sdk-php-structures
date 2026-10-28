<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetOnDemandScanStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceId
 * @property string $scanId
 * @property 'AMI' $resourceType
 */
class GetOnDemandScanStatusRequest extends Request
{
    /**
     * @param array{
     *     resourceId: string,
     *     scanId: string,
     *     resourceType: 'AMI'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

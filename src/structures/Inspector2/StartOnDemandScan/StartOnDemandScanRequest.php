<?php

namespace Sunaoka\Aws\Structures\Inspector2\StartOnDemandScan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceId
 * @property 'AMI' $resourceType
 * @property string|null $clientToken
 */
class StartOnDemandScanRequest extends Request
{
    /**
     * @param array{
     *     resourceId: string,
     *     resourceType: 'AMI',
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

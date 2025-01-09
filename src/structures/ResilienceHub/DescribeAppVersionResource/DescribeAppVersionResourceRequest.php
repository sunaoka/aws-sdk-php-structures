<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeAppVersionResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string $appVersion
 * @property string $awsAccountId
 * @property string $awsRegion
 * @property Shapes\LogicalResourceId $logicalResourceId
 * @property string $physicalResourceId
 * @property string $resourceName
 */
class DescribeAppVersionResourceRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     appVersion: string,
     *     awsAccountId?: string,
     *     awsRegion?: string,
     *     logicalResourceId?: Shapes\LogicalResourceId,
     *     physicalResourceId?: string,
     *     resourceName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

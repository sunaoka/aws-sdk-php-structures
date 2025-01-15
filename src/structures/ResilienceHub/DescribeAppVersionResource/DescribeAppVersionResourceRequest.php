<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeAppVersionResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string $appVersion
 * @property string|null $awsAccountId
 * @property string|null $awsRegion
 * @property Shapes\LogicalResourceId|null $logicalResourceId
 * @property string|null $physicalResourceId
 * @property string|null $resourceName
 */
class DescribeAppVersionResourceRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     appVersion: string,
     *     awsAccountId?: string|null,
     *     awsRegion?: string|null,
     *     logicalResourceId?: Shapes\LogicalResourceId|null,
     *     physicalResourceId?: string|null,
     *     resourceName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

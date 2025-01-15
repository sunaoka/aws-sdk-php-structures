<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteAppVersionResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string|null $awsAccountId
 * @property string|null $awsRegion
 * @property string|null $clientToken
 * @property Shapes\LogicalResourceId|null $logicalResourceId
 * @property string|null $physicalResourceId
 * @property string|null $resourceName
 */
class DeleteAppVersionResourceRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     awsAccountId?: string|null,
     *     awsRegion?: string|null,
     *     clientToken?: string|null,
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

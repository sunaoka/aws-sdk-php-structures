<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteAppVersionResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string $awsAccountId
 * @property string $awsRegion
 * @property string $clientToken
 * @property Shapes\LogicalResourceId $logicalResourceId
 * @property string $physicalResourceId
 * @property string $resourceName
 */
class DeleteAppVersionResourceRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     awsAccountId?: string,
     *     awsRegion?: string,
     *     clientToken?: string,
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

<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\CreateAppVersionResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, list<string>> $additionalInfo
 * @property string $appArn
 * @property list<string> $appComponents
 * @property string $awsAccountId
 * @property string $awsRegion
 * @property string $clientToken
 * @property Shapes\LogicalResourceId $logicalResourceId
 * @property string $physicalResourceId
 * @property string $resourceName
 * @property string $resourceType
 */
class CreateAppVersionResourceRequest extends Request
{
    /**
     * @param array{
     *     additionalInfo?: array<string, list<string>>,
     *     appArn: string,
     *     appComponents: list<string>,
     *     awsAccountId?: string,
     *     awsRegion?: string,
     *     clientToken?: string,
     *     logicalResourceId: Shapes\LogicalResourceId,
     *     physicalResourceId: string,
     *     resourceName?: string,
     *     resourceType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

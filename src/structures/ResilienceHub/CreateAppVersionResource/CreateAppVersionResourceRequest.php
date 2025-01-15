<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\CreateAppVersionResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, list<string>>|null $additionalInfo
 * @property string $appArn
 * @property list<string> $appComponents
 * @property string|null $awsAccountId
 * @property string|null $awsRegion
 * @property string|null $clientToken
 * @property Shapes\LogicalResourceId $logicalResourceId
 * @property string $physicalResourceId
 * @property string|null $resourceName
 * @property string $resourceType
 */
class CreateAppVersionResourceRequest extends Request
{
    /**
     * @param array{
     *     additionalInfo?: array<string, list<string>>|null,
     *     appArn: string,
     *     appComponents: list<string>,
     *     awsAccountId?: string|null,
     *     awsRegion?: string|null,
     *     clientToken?: string|null,
     *     logicalResourceId: Shapes\LogicalResourceId,
     *     physicalResourceId: string,
     *     resourceName?: string|null,
     *     resourceType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

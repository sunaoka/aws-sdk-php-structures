<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\UpdateAppVersionResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, list<string>>|null $additionalInfo
 * @property string $appArn
 * @property list<string>|null $appComponents
 * @property string|null $awsAccountId
 * @property string|null $awsRegion
 * @property bool|null $excluded
 * @property Shapes\LogicalResourceId|null $logicalResourceId
 * @property string|null $physicalResourceId
 * @property string|null $resourceName
 * @property string|null $resourceType
 */
class UpdateAppVersionResourceRequest extends Request
{
    /**
     * @param array{
     *     additionalInfo?: array<string, list<string>>|null,
     *     appArn: string,
     *     appComponents?: list<string>|null,
     *     awsAccountId?: string|null,
     *     awsRegion?: string|null,
     *     excluded?: bool|null,
     *     logicalResourceId?: Shapes\LogicalResourceId|null,
     *     physicalResourceId?: string|null,
     *     resourceName?: string|null,
     *     resourceType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\UpdateAppVersionResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, list<string>> $additionalInfo
 * @property string $appArn
 * @property list<string> $appComponents
 * @property string $awsAccountId
 * @property string $awsRegion
 * @property bool $excluded
 * @property Shapes\LogicalResourceId $logicalResourceId
 * @property string $physicalResourceId
 * @property string $resourceName
 * @property string $resourceType
 */
class UpdateAppVersionResourceRequest extends Request
{
    /**
     * @param array{
     *     additionalInfo?: array<string, list<string>>,
     *     appArn: string,
     *     appComponents?: list<string>,
     *     awsAccountId?: string,
     *     awsRegion?: string,
     *     excluded?: bool,
     *     logicalResourceId?: Shapes\LogicalResourceId,
     *     physicalResourceId?: string,
     *     resourceName?: string,
     *     resourceType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

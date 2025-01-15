<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\UpdateAppVersionResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, list<string>>|null $additionalInfo
 * @property list<AppComponent>|null $appComponents
 * @property bool|null $excluded
 * @property LogicalResourceId $logicalResourceId
 * @property string|null $parentResourceName
 * @property PhysicalResourceId $physicalResourceId
 * @property string|null $resourceName
 * @property string $resourceType
 * @property 'AppTemplate'|'Discovered'|null $sourceType
 */
class PhysicalResource extends Shape
{
    /**
     * @param array{
     *     additionalInfo?: array<string, list<string>>|null,
     *     appComponents?: list<AppComponent>|null,
     *     excluded?: bool|null,
     *     logicalResourceId: LogicalResourceId,
     *     parentResourceName?: string|null,
     *     physicalResourceId: PhysicalResourceId,
     *     resourceName?: string|null,
     *     resourceType: string,
     *     sourceType?: 'AppTemplate'|'Discovered'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

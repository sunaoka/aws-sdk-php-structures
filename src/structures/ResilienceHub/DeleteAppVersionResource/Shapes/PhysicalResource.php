<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteAppVersionResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, list<string>> $additionalInfo
 * @property list<AppComponent> $appComponents
 * @property bool $excluded
 * @property LogicalResourceId $logicalResourceId
 * @property string $parentResourceName
 * @property PhysicalResourceId $physicalResourceId
 * @property string $resourceName
 * @property string $resourceType
 * @property 'AppTemplate'|'Discovered' $sourceType
 */
class PhysicalResource extends Shape
{
    /**
     * @param array{
     *     additionalInfo?: array<string, list<string>>,
     *     appComponents?: list<AppComponent>,
     *     excluded?: bool,
     *     logicalResourceId: LogicalResourceId,
     *     parentResourceName?: string,
     *     physicalResourceId: PhysicalResourceId,
     *     resourceName?: string,
     *     resourceType: string,
     *     sourceType?: 'AppTemplate'|'Discovered'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

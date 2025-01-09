<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ExecuteProvisionedProductServiceAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecordId
 * @property string $ProvisionedProductName
 * @property 'CREATED'|'IN_PROGRESS'|'IN_PROGRESS_IN_ERROR'|'SUCCEEDED'|'FAILED' $Status
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $UpdatedTime
 * @property string $ProvisionedProductType
 * @property string $RecordType
 * @property string $ProvisionedProductId
 * @property string $ProductId
 * @property string $ProvisioningArtifactId
 * @property string $PathId
 * @property list<RecordError> $RecordErrors
 * @property list<RecordTag> $RecordTags
 * @property string $LaunchRoleArn
 */
class RecordDetail extends Shape
{
    /**
     * @param array{
     *     RecordId?: string,
     *     ProvisionedProductName?: string,
     *     Status?: 'CREATED'|'IN_PROGRESS'|'IN_PROGRESS_IN_ERROR'|'SUCCEEDED'|'FAILED',
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     UpdatedTime?: \Aws\Api\DateTimeResult,
     *     ProvisionedProductType?: string,
     *     RecordType?: string,
     *     ProvisionedProductId?: string,
     *     ProductId?: string,
     *     ProvisioningArtifactId?: string,
     *     PathId?: string,
     *     RecordErrors?: list<RecordError>,
     *     RecordTags?: list<RecordTag>,
     *     LaunchRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

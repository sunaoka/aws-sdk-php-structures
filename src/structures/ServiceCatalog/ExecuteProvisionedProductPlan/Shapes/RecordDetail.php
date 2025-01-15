<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ExecuteProvisionedProductPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RecordId
 * @property string|null $ProvisionedProductName
 * @property 'CREATED'|'IN_PROGRESS'|'IN_PROGRESS_IN_ERROR'|'SUCCEEDED'|'FAILED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $UpdatedTime
 * @property string|null $ProvisionedProductType
 * @property string|null $RecordType
 * @property string|null $ProvisionedProductId
 * @property string|null $ProductId
 * @property string|null $ProvisioningArtifactId
 * @property string|null $PathId
 * @property list<RecordError>|null $RecordErrors
 * @property list<RecordTag>|null $RecordTags
 * @property string|null $LaunchRoleArn
 */
class RecordDetail extends Shape
{
    /**
     * @param array{
     *     RecordId?: string|null,
     *     ProvisionedProductName?: string|null,
     *     Status?: 'CREATED'|'IN_PROGRESS'|'IN_PROGRESS_IN_ERROR'|'SUCCEEDED'|'FAILED'|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     ProvisionedProductType?: string|null,
     *     RecordType?: string|null,
     *     ProvisionedProductId?: string|null,
     *     ProductId?: string|null,
     *     ProvisioningArtifactId?: string|null,
     *     PathId?: string|null,
     *     RecordErrors?: list<RecordError>|null,
     *     RecordTags?: list<RecordTag>|null,
     *     LaunchRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

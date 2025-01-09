<?php

namespace Sunaoka\Aws\Structures\DataZone\ListMetadataGenerationRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $domainId
 * @property string $id
 * @property string $owningProjectId
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELED'|'SUCCEEDED'|'FAILED' $status
 * @property MetadataGenerationRunTarget $target
 * @property 'BUSINESS_DESCRIPTIONS' $type
 */
class MetadataGenerationRunItem extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string,
     *     domainId: string,
     *     id: string,
     *     owningProjectId: string,
     *     status?: 'SUBMITTED'|'IN_PROGRESS'|'CANCELED'|'SUCCEEDED'|'FAILED',
     *     target?: MetadataGenerationRunTarget,
     *     type?: 'BUSINESS_DESCRIPTIONS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

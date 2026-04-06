<?php

namespace Sunaoka\Aws\Structures\Evs\CreateEnvironmentHost\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $environmentId
 * @property string|null $environmentName
 * @property 'VCF-5.2.1'|'VCF-5.2.2'|null $vcfVersion
 * @property 'PASSED'|'FAILED'|'UNKNOWN'|null $environmentStatus
 * @property 'CREATING'|'CREATED'|'DELETING'|'DELETED'|'CREATE_FAILED'|null $environmentState
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 * @property string|null $environmentArn
 */
class EnvironmentSummary extends Shape
{
    /**
     * @param array{
     *     environmentId?: string|null,
     *     environmentName?: string|null,
     *     vcfVersion?: 'VCF-5.2.1'|'VCF-5.2.2'|null,
     *     environmentStatus?: 'PASSED'|'FAILED'|'UNKNOWN'|null,
     *     environmentState?: 'CREATING'|'CREATED'|'DELETING'|'DELETED'|'CREATE_FAILED'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     modifiedAt?: \Aws\Api\DateTimeResult|null,
     *     environmentArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\AppSync\GetApiAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domainName
 * @property string|null $apiId
 * @property 'PROCESSING'|'FAILED'|'SUCCESS'|null $associationStatus
 * @property string|null $deploymentDetail
 */
class ApiAssociation extends Shape
{
    /**
     * @param array{
     *     domainName?: string|null,
     *     apiId?: string|null,
     *     associationStatus?: 'PROCESSING'|'FAILED'|'SUCCESS'|null,
     *     deploymentDetail?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

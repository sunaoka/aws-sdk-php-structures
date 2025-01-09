<?php

namespace Sunaoka\Aws\Structures\AppSync\GetApiAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainName
 * @property string $apiId
 * @property 'PROCESSING'|'FAILED'|'SUCCESS' $associationStatus
 * @property string $deploymentDetail
 */
class ApiAssociation extends Shape
{
    /**
     * @param array{
     *     domainName?: string,
     *     apiId?: string,
     *     associationStatus?: 'PROCESSING'|'FAILED'|'SUCCESS',
     *     deploymentDetail?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

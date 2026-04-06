<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchAssociateCodeSecurityScanConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $scanConfigurationArn
 * @property CodeSecurityResource|null $resource
 * @property 'INTERNAL_ERROR'|'ACCESS_DENIED'|'SCAN_CONFIGURATION_NOT_FOUND'|'INVALID_INPUT'|'RESOURCE_NOT_FOUND'|'QUOTA_EXCEEDED'|null $statusCode
 * @property string|null $statusMessage
 */
class FailedAssociationResult extends Shape
{
    /**
     * @param array{
     *     scanConfigurationArn?: string|null,
     *     resource?: CodeSecurityResource|null,
     *     statusCode?: 'INTERNAL_ERROR'|'ACCESS_DENIED'|'SCAN_CONFIGURATION_NOT_FOUND'|'INVALID_INPUT'|'RESOURCE_NOT_FOUND'|'QUOTA_EXCEEDED'|null,
     *     statusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

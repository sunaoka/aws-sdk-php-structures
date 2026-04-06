<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchAssociateCodeSecurityScanConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $scanConfigurationArn
 * @property CodeSecurityResource|null $resource
 */
class SuccessfulAssociationResult extends Shape
{
    /**
     * @param array{
     *     scanConfigurationArn?: string|null,
     *     resource?: CodeSecurityResource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

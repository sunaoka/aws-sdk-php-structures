<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchAssociateCodeSecurityScanConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scanConfigurationArn
 * @property CodeSecurityResource $resource
 */
class AssociateConfigurationRequest extends Shape
{
    /**
     * @param array{
     *     scanConfigurationArn: string,
     *     resource: CodeSecurityResource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

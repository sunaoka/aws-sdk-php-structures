<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifier
 * @property 'CFN_STACK'|'TAGS'|'EKS'|'TERRAFORM'|'DESIGN_FILE'|'MONITORING' $type
 */
class InputSource extends Shape
{
    /**
     * @param array{
     *     identifier: string,
     *     type: 'CFN_STACK'|'TAGS'|'EKS'|'TERRAFORM'|'DESIGN_FILE'|'MONITORING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetRemediationsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Resource.Type'|'Priority'|'Status'|'Resource.Id'|'Resource.ResourceOwnerAccountId'|'Resource.CloudProvider' $FieldName
 * @property RemediationStringFilterCondition $Filter
 */
class RemediationStringFilter extends Shape
{
    /**
     * @param array{
     *     FieldName: 'Resource.Type'|'Priority'|'Status'|'Resource.Id'|'Resource.ResourceOwnerAccountId'|'Resource.CloudProvider',
     *     Filter: RemediationStringFilterCondition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

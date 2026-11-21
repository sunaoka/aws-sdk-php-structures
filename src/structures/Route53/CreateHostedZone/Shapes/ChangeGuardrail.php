<?php

namespace Sunaoka\Aws\Structures\Route53\CreateHostedZone\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NS_FORMAT_CHECK'|'NS_DELEGATION_AUTHORITY_CHECK'|'NS_OCCLUSION_CHECK'|'ALIAS_TARGET_CHECK'|'ACTIVE_RECORD_CHECK'|'ACTIVE_DELEGATION_CHECK' $Name
 * @property 'ENABLED'|'DISABLED' $Status
 */
class ChangeGuardrail extends Shape
{
    /**
     * @param array{
     *     Name: 'NS_FORMAT_CHECK'|'NS_DELEGATION_AUTHORITY_CHECK'|'NS_OCCLUSION_CHECK'|'ALIAS_TARGET_CHECK'|'ACTIVE_RECORD_CHECK'|'ACTIVE_DELEGATION_CHECK',
     *     Status: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

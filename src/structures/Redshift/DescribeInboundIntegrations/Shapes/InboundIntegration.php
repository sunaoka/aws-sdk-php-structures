<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeInboundIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IntegrationArn
 * @property string|null $SourceArn
 * @property string|null $TargetArn
 * @property 'creating'|'active'|'modifying'|'failed'|'deleting'|'syncing'|'needs_attention'|null $Status
 * @property list<IntegrationError>|null $Errors
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 */
class InboundIntegration extends Shape
{
    /**
     * @param array{
     *     IntegrationArn?: string|null,
     *     SourceArn?: string|null,
     *     TargetArn?: string|null,
     *     Status?: 'creating'|'active'|'modifying'|'failed'|'deleting'|'syncing'|'needs_attention'|null,
     *     Errors?: list<IntegrationError>|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

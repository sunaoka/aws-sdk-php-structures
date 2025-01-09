<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeInboundIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IntegrationArn
 * @property string $SourceArn
 * @property string $TargetArn
 * @property 'creating'|'active'|'modifying'|'failed'|'deleting'|'syncing'|'needs_attention' $Status
 * @property list<IntegrationError> $Errors
 * @property \Aws\Api\DateTimeResult $CreateTime
 */
class InboundIntegration extends Shape
{
    /**
     * @param array{
     *     IntegrationArn?: string,
     *     SourceArn?: string,
     *     TargetArn?: string,
     *     Status?: 'creating'|'active'|'modifying'|'failed'|'deleting'|'syncing'|'needs_attention',
     *     Errors?: list<IntegrationError>,
     *     CreateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

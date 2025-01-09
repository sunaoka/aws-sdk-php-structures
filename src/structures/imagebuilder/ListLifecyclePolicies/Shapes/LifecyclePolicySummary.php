<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListLifecyclePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property 'DISABLED'|'ENABLED' $status
 * @property string $executionRole
 * @property 'AMI_IMAGE'|'CONTAINER_IMAGE' $resourceType
 * @property \Aws\Api\DateTimeResult $dateCreated
 * @property \Aws\Api\DateTimeResult $dateUpdated
 * @property \Aws\Api\DateTimeResult $dateLastRun
 * @property array<string, string> $tags
 */
class LifecyclePolicySummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     description?: string,
     *     status?: 'DISABLED'|'ENABLED',
     *     executionRole?: string,
     *     resourceType?: 'AMI_IMAGE'|'CONTAINER_IMAGE',
     *     dateCreated?: \Aws\Api\DateTimeResult,
     *     dateUpdated?: \Aws\Api\DateTimeResult,
     *     dateLastRun?: \Aws\Api\DateTimeResult,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

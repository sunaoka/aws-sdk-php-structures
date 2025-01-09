<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property string $Uri
 * @property string $ObjectTypeName
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property array<string, string> $Tags
 * @property array<string, string> $ObjectTypeNames
 * @property string $WorkflowId
 * @property bool $IsUnstructured
 * @property string $RoleArn
 * @property list<string> $EventTriggerNames
 */
class ListIntegrationItem extends Shape
{
    /**
     * @param array{
     *     DomainName: string,
     *     Uri: string,
     *     ObjectTypeName?: string,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     LastUpdatedAt: \Aws\Api\DateTimeResult,
     *     Tags?: array<string, string>,
     *     ObjectTypeNames?: array<string, string>,
     *     WorkflowId?: string,
     *     IsUnstructured?: bool,
     *     RoleArn?: string,
     *     EventTriggerNames?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

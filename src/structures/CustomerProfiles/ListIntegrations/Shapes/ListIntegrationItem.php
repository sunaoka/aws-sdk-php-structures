<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property string $Uri
 * @property string|null $ObjectTypeName
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property array<string, string>|null $Tags
 * @property array<string, string>|null $ObjectTypeNames
 * @property string|null $WorkflowId
 * @property bool|null $IsUnstructured
 * @property string|null $RoleArn
 * @property list<string>|null $EventTriggerNames
 */
class ListIntegrationItem extends Shape
{
    /**
     * @param array{
     *     DomainName: string,
     *     Uri: string,
     *     ObjectTypeName?: string|null,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     LastUpdatedAt: \Aws\Api\DateTimeResult,
     *     Tags?: array<string, string>|null,
     *     ObjectTypeNames?: array<string, string>|null,
     *     WorkflowId?: string|null,
     *     IsUnstructured?: bool|null,
     *     RoleArn?: string|null,
     *     EventTriggerNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

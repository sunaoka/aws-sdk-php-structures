<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $Uri
 * @property string $ObjectTypeName
 * @property array<string, string> $Tags
 * @property Shapes\FlowDefinition $FlowDefinition
 * @property array<string, string> $ObjectTypeNames
 * @property string $RoleArn
 * @property list<string> $EventTriggerNames
 */
class PutIntegrationRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Uri?: string,
     *     ObjectTypeName?: string,
     *     Tags?: array<string, string>,
     *     FlowDefinition?: Shapes\FlowDefinition,
     *     ObjectTypeNames?: array<string, string>,
     *     RoleArn?: string,
     *     EventTriggerNames?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

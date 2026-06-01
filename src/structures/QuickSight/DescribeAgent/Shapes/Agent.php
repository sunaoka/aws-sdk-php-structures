<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Spaces
 * @property list<string>|null $ActionConnectors
 * @property string|null $Description
 * @property string|null $IconId
 * @property string $Name
 * @property list<string>|null $StarterPrompts
 * @property string|null $WelcomeMessage
 * @property string $Arn
 * @property string $AgentId
 * @property 'PREVIEW'|'PUBLISHED' $AgentLifecycle
 * @property 'ACTIVE'|'UPDATING'|'FAILED'|'CREATING' $AgentStatus
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $Creator
 * @property CustomPromptInterface|null $CustomPromptInterface
 * @property string|null $ErrorMessage
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class Agent extends Shape
{
    /**
     * @param array{
     *     Spaces?: list<string>|null,
     *     ActionConnectors?: list<string>|null,
     *     Description?: string|null,
     *     IconId?: string|null,
     *     Name: string,
     *     StarterPrompts?: list<string>|null,
     *     WelcomeMessage?: string|null,
     *     Arn: string,
     *     AgentId: string,
     *     AgentLifecycle: 'PREVIEW'|'PUBLISHED',
     *     AgentStatus: 'ACTIVE'|'UPDATING'|'FAILED'|'CREATING',
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     Creator: string,
     *     CustomPromptInterface?: CustomPromptInterface|null,
     *     ErrorMessage?: string|null,
     *     UpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

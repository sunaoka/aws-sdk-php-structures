<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateAgentContext\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $profileArn
 * @property string $title
 * @property 'APPLICATION' $contextType
 * @property ContextContent $content
 * @property 'SAS'|'DESKTOP_APPLICATION'|'OTHER'|null $applicationType
 * @property 'MISSION_CRITICAL'|'BUSINESS_CRITICAL'|'NON_CRITICAL'|'TEST_DEVELOPMENT'|null $criticality
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $lastModifiedBy
 * @property \Aws\Api\DateTimeResult|null $lastModifiedAt
 */
class ContextSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     profileArn: string,
     *     title: string,
     *     contextType: 'APPLICATION',
     *     content: ContextContent,
     *     applicationType?: 'SAS'|'DESKTOP_APPLICATION'|'OTHER'|null,
     *     criticality?: 'MISSION_CRITICAL'|'BUSINESS_CRITICAL'|'NON_CRITICAL'|'TEST_DEVELOPMENT'|null,
     *     createdBy: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastModifiedBy?: string|null,
     *     lastModifiedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

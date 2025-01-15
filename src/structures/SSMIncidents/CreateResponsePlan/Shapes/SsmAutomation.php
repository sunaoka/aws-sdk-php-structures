<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\CreateResponsePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $documentName
 * @property string|null $documentVersion
 * @property array<string, DynamicSsmParameterValue>|null $dynamicParameters
 * @property array<string, list<string>>|null $parameters
 * @property string $roleArn
 * @property 'RESPONSE_PLAN_OWNER_ACCOUNT'|'IMPACTED_ACCOUNT'|null $targetAccount
 */
class SsmAutomation extends Shape
{
    /**
     * @param array{
     *     documentName: string,
     *     documentVersion?: string|null,
     *     dynamicParameters?: array<string, DynamicSsmParameterValue>|null,
     *     parameters?: array<string, list<string>>|null,
     *     roleArn: string,
     *     targetAccount?: 'RESPONSE_PLAN_OWNER_ACCOUNT'|'IMPACTED_ACCOUNT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

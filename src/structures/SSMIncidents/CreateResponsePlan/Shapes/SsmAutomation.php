<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\CreateResponsePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $documentName
 * @property string $documentVersion
 * @property array<string, DynamicSsmParameterValue> $dynamicParameters
 * @property array<string, list<string>> $parameters
 * @property string $roleArn
 * @property 'RESPONSE_PLAN_OWNER_ACCOUNT'|'IMPACTED_ACCOUNT' $targetAccount
 */
class SsmAutomation extends Shape
{
    /**
     * @param array{
     *     documentName: string,
     *     documentVersion?: string,
     *     dynamicParameters?: array<string, DynamicSsmParameterValue>,
     *     parameters?: array<string, list<string>>,
     *     roleArn: string,
     *     targetAccount?: 'RESPONSE_PLAN_OWNER_ACCOUNT'|'IMPACTED_ACCOUNT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\mgn\PutTemplateAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $actionID
 * @property string $actionName
 * @property bool|null $active
 * @property 'DISASTER_RECOVERY'|'OPERATING_SYSTEM'|'LICENSE_AND_SUBSCRIPTION'|'VALIDATION'|'OBSERVABILITY'|'REFACTORING'|'SECURITY'|'NETWORKING'|'CONFIGURATION'|'BACKUP'|'OTHER'|null $category
 * @property string|null $description
 * @property string $documentIdentifier
 * @property string|null $documentVersion
 * @property array<string, Shapes\SsmExternalParameter>|null $externalParameters
 * @property string $launchConfigurationTemplateID
 * @property bool|null $mustSucceedForCutover
 * @property string|null $operatingSystem
 * @property int<1001, 10000> $order
 * @property array<string, list<Shapes\SsmParameterStoreParameter>>|null $parameters
 * @property int<1, max>|null $timeoutSeconds
 */
class PutTemplateActionRequest extends Request
{
    /**
     * @param array{
     *     actionID: string,
     *     actionName: string,
     *     active?: bool|null,
     *     category?: 'DISASTER_RECOVERY'|'OPERATING_SYSTEM'|'LICENSE_AND_SUBSCRIPTION'|'VALIDATION'|'OBSERVABILITY'|'REFACTORING'|'SECURITY'|'NETWORKING'|'CONFIGURATION'|'BACKUP'|'OTHER'|null,
     *     description?: string|null,
     *     documentIdentifier: string,
     *     documentVersion?: string|null,
     *     externalParameters?: array<string, Shapes\SsmExternalParameter>|null,
     *     launchConfigurationTemplateID: string,
     *     mustSucceedForCutover?: bool|null,
     *     operatingSystem?: string|null,
     *     order: int<1001, 10000>,
     *     parameters?: array<string, list<Shapes\SsmParameterStoreParameter>>|null,
     *     timeoutSeconds?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

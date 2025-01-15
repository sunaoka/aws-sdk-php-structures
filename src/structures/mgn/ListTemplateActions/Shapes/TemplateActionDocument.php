<?php

namespace Sunaoka\Aws\Structures\mgn\ListTemplateActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $actionID
 * @property string|null $actionName
 * @property bool|null $active
 * @property 'DISASTER_RECOVERY'|'OPERATING_SYSTEM'|'LICENSE_AND_SUBSCRIPTION'|'VALIDATION'|'OBSERVABILITY'|'REFACTORING'|'SECURITY'|'NETWORKING'|'CONFIGURATION'|'BACKUP'|'OTHER'|null $category
 * @property string|null $description
 * @property string|null $documentIdentifier
 * @property string|null $documentVersion
 * @property array<string, SsmExternalParameter>|null $externalParameters
 * @property bool|null $mustSucceedForCutover
 * @property string|null $operatingSystem
 * @property int<1001, 10000>|null $order
 * @property array<string, list<SsmParameterStoreParameter>>|null $parameters
 * @property int<1, max>|null $timeoutSeconds
 */
class TemplateActionDocument extends Shape
{
    /**
     * @param array{
     *     actionID?: string|null,
     *     actionName?: string|null,
     *     active?: bool|null,
     *     category?: 'DISASTER_RECOVERY'|'OPERATING_SYSTEM'|'LICENSE_AND_SUBSCRIPTION'|'VALIDATION'|'OBSERVABILITY'|'REFACTORING'|'SECURITY'|'NETWORKING'|'CONFIGURATION'|'BACKUP'|'OTHER'|null,
     *     description?: string|null,
     *     documentIdentifier?: string|null,
     *     documentVersion?: string|null,
     *     externalParameters?: array<string, SsmExternalParameter>|null,
     *     mustSucceedForCutover?: bool|null,
     *     operatingSystem?: string|null,
     *     order?: int<1001, 10000>|null,
     *     parameters?: array<string, list<SsmParameterStoreParameter>>|null,
     *     timeoutSeconds?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

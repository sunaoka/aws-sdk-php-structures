<?php

namespace Sunaoka\Aws\Structures\mgn\ListTemplateActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionID
 * @property string $actionName
 * @property bool $active
 * @property 'DISASTER_RECOVERY'|'OPERATING_SYSTEM'|'LICENSE_AND_SUBSCRIPTION'|'VALIDATION'|'OBSERVABILITY'|'REFACTORING'|'SECURITY'|'NETWORKING'|'CONFIGURATION'|'BACKUP'|'OTHER' $category
 * @property string $description
 * @property string $documentIdentifier
 * @property string $documentVersion
 * @property array<string, SsmExternalParameter> $externalParameters
 * @property bool $mustSucceedForCutover
 * @property string $operatingSystem
 * @property int $order
 * @property array<string, list<SsmParameterStoreParameter>> $parameters
 * @property int $timeoutSeconds
 */
class TemplateActionDocument extends Shape
{
    /**
     * @param array{
     *     actionID?: string,
     *     actionName?: string,
     *     active?: bool,
     *     category?: 'DISASTER_RECOVERY'|'OPERATING_SYSTEM'|'LICENSE_AND_SUBSCRIPTION'|'VALIDATION'|'OBSERVABILITY'|'REFACTORING'|'SECURITY'|'NETWORKING'|'CONFIGURATION'|'BACKUP'|'OTHER',
     *     description?: string,
     *     documentIdentifier?: string,
     *     documentVersion?: string,
     *     externalParameters?: array<string, SsmExternalParameter>,
     *     mustSucceedForCutover?: bool,
     *     operatingSystem?: string,
     *     order?: int,
     *     parameters?: array<string, list<SsmParameterStoreParameter>>,
     *     timeoutSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

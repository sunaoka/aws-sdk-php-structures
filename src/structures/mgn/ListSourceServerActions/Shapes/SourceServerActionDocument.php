<?php

namespace Sunaoka\Aws\Structures\mgn\ListSourceServerActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $actionID
 * @property string|null $actionName
 * @property string|null $documentIdentifier
 * @property int<1001, 10000>|null $order
 * @property string|null $documentVersion
 * @property bool|null $active
 * @property int<1, max>|null $timeoutSeconds
 * @property bool|null $mustSucceedForCutover
 * @property array<string, list<SsmParameterStoreParameter>>|null $parameters
 * @property array<string, SsmExternalParameter>|null $externalParameters
 * @property string|null $description
 * @property 'DISASTER_RECOVERY'|'OPERATING_SYSTEM'|'LICENSE_AND_SUBSCRIPTION'|'VALIDATION'|'OBSERVABILITY'|'REFACTORING'|'SECURITY'|'NETWORKING'|'CONFIGURATION'|'BACKUP'|'OTHER'|null $category
 */
class SourceServerActionDocument extends Shape
{
    /**
     * @param array{
     *     actionID?: string|null,
     *     actionName?: string|null,
     *     documentIdentifier?: string|null,
     *     order?: int<1001, 10000>|null,
     *     documentVersion?: string|null,
     *     active?: bool|null,
     *     timeoutSeconds?: int<1, max>|null,
     *     mustSucceedForCutover?: bool|null,
     *     parameters?: array<string, list<SsmParameterStoreParameter>>|null,
     *     externalParameters?: array<string, SsmExternalParameter>|null,
     *     description?: string|null,
     *     category?: 'DISASTER_RECOVERY'|'OPERATING_SYSTEM'|'LICENSE_AND_SUBSCRIPTION'|'VALIDATION'|'OBSERVABILITY'|'REFACTORING'|'SECURITY'|'NETWORKING'|'CONFIGURATION'|'BACKUP'|'OTHER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\mgn\ListSourceServerActions\Shapes;

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
 * @property int<1001, 10000> $order
 * @property array<string, list<SsmParameterStoreParameter>> $parameters
 * @property int<1, max> $timeoutSeconds
 */
class SourceServerActionDocument extends Shape
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
     *     order?: int<1001, 10000>,
     *     parameters?: array<string, list<SsmParameterStoreParameter>>,
     *     timeoutSeconds?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

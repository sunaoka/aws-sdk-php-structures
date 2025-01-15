<?php

namespace Sunaoka\Aws\Structures\mgn\PutSourceServerAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountID
 * @property string $actionID
 * @property string $actionName
 * @property bool|null $active
 * @property 'DISASTER_RECOVERY'|'OPERATING_SYSTEM'|'LICENSE_AND_SUBSCRIPTION'|'VALIDATION'|'OBSERVABILITY'|'REFACTORING'|'SECURITY'|'NETWORKING'|'CONFIGURATION'|'BACKUP'|'OTHER'|null $category
 * @property string|null $description
 * @property string $documentIdentifier
 * @property string|null $documentVersion
 * @property array<string, Shapes\SsmExternalParameter>|null $externalParameters
 * @property bool|null $mustSucceedForCutover
 * @property int<1001, 10000> $order
 * @property array<string, list<Shapes\SsmParameterStoreParameter>>|null $parameters
 * @property string $sourceServerID
 * @property int<1, max>|null $timeoutSeconds
 */
class PutSourceServerActionRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string|null,
     *     actionID: string,
     *     actionName: string,
     *     active?: bool|null,
     *     category?: 'DISASTER_RECOVERY'|'OPERATING_SYSTEM'|'LICENSE_AND_SUBSCRIPTION'|'VALIDATION'|'OBSERVABILITY'|'REFACTORING'|'SECURITY'|'NETWORKING'|'CONFIGURATION'|'BACKUP'|'OTHER'|null,
     *     description?: string|null,
     *     documentIdentifier: string,
     *     documentVersion?: string|null,
     *     externalParameters?: array<string, Shapes\SsmExternalParameter>|null,
     *     mustSucceedForCutover?: bool|null,
     *     order: int<1001, 10000>,
     *     parameters?: array<string, list<Shapes\SsmParameterStoreParameter>>|null,
     *     sourceServerID: string,
     *     timeoutSeconds?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

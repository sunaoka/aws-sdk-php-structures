<?php

namespace Sunaoka\Aws\Structures\mgn\PutSourceServerAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceServerID
 * @property string $actionName
 * @property string $documentIdentifier
 * @property int<1001, 10000> $order
 * @property string $actionID
 * @property string|null $documentVersion
 * @property bool|null $active
 * @property int<1, max>|null $timeoutSeconds
 * @property bool|null $mustSucceedForCutover
 * @property array<string, list<Shapes\SsmParameterStoreParameter>>|null $parameters
 * @property array<string, Shapes\SsmExternalParameter>|null $externalParameters
 * @property string|null $description
 * @property 'DISASTER_RECOVERY'|'OPERATING_SYSTEM'|'LICENSE_AND_SUBSCRIPTION'|'VALIDATION'|'OBSERVABILITY'|'REFACTORING'|'SECURITY'|'NETWORKING'|'CONFIGURATION'|'BACKUP'|'OTHER'|null $category
 * @property string|null $accountID
 */
class PutSourceServerActionRequest extends Request
{
    /**
     * @param array{
     *     sourceServerID: string,
     *     actionName: string,
     *     documentIdentifier: string,
     *     order: int<1001, 10000>,
     *     actionID: string,
     *     documentVersion?: string|null,
     *     active?: bool|null,
     *     timeoutSeconds?: int<1, max>|null,
     *     mustSucceedForCutover?: bool|null,
     *     parameters?: array<string, list<Shapes\SsmParameterStoreParameter>>|null,
     *     externalParameters?: array<string, Shapes\SsmExternalParameter>|null,
     *     description?: string|null,
     *     category?: 'DISASTER_RECOVERY'|'OPERATING_SYSTEM'|'LICENSE_AND_SUBSCRIPTION'|'VALIDATION'|'OBSERVABILITY'|'REFACTORING'|'SECURITY'|'NETWORKING'|'CONFIGURATION'|'BACKUP'|'OTHER'|null,
     *     accountID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

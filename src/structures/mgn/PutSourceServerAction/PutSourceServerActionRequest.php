<?php

namespace Sunaoka\Aws\Structures\mgn\PutSourceServerAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property string $actionID
 * @property string $actionName
 * @property bool $active
 * @property 'DISASTER_RECOVERY'|'OPERATING_SYSTEM'|'LICENSE_AND_SUBSCRIPTION'|'VALIDATION'|'OBSERVABILITY'|'REFACTORING'|'SECURITY'|'NETWORKING'|'CONFIGURATION'|'BACKUP'|'OTHER' $category
 * @property string $description
 * @property string $documentIdentifier
 * @property string $documentVersion
 * @property array<string, Shapes\SsmExternalParameter> $externalParameters
 * @property bool $mustSucceedForCutover
 * @property int<1001, 10000> $order
 * @property array<string, list<Shapes\SsmParameterStoreParameter>> $parameters
 * @property string $sourceServerID
 * @property int<1, max> $timeoutSeconds
 */
class PutSourceServerActionRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     actionID: string,
     *     actionName: string,
     *     active?: bool,
     *     category?: 'DISASTER_RECOVERY'|'OPERATING_SYSTEM'|'LICENSE_AND_SUBSCRIPTION'|'VALIDATION'|'OBSERVABILITY'|'REFACTORING'|'SECURITY'|'NETWORKING'|'CONFIGURATION'|'BACKUP'|'OTHER',
     *     description?: string,
     *     documentIdentifier: string,
     *     documentVersion?: string,
     *     externalParameters?: array<string, Shapes\SsmExternalParameter>,
     *     mustSucceedForCutover?: bool,
     *     order: int<1001, 10000>,
     *     parameters?: array<string, list<Shapes\SsmParameterStoreParameter>>,
     *     sourceServerID: string,
     *     timeoutSeconds?: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

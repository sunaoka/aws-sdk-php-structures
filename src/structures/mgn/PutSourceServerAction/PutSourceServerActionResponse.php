<?php

namespace Sunaoka\Aws\Structures\mgn\PutSourceServerAction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $actionID
 * @property string $actionName
 * @property bool $active
 * @property 'DISASTER_RECOVERY'|'OPERATING_SYSTEM'|'LICENSE_AND_SUBSCRIPTION'|'VALIDATION'|'OBSERVABILITY'|'REFACTORING'|'SECURITY'|'NETWORKING'|'CONFIGURATION'|'BACKUP'|'OTHER' $category
 * @property string $description
 * @property string $documentIdentifier
 * @property string $documentVersion
 * @property array<string, Shapes\SsmExternalParameter> $externalParameters
 * @property bool $mustSucceedForCutover
 * @property int $order
 * @property array<string, list<Shapes\SsmParameterStoreParameter>> $parameters
 * @property int $timeoutSeconds
 */
class PutSourceServerActionResponse extends Response
{
}

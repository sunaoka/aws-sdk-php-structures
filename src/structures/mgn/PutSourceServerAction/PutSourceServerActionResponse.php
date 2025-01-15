<?php

namespace Sunaoka\Aws\Structures\mgn\PutSourceServerAction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $actionID
 * @property string|null $actionName
 * @property bool|null $active
 * @property 'DISASTER_RECOVERY'|'OPERATING_SYSTEM'|'LICENSE_AND_SUBSCRIPTION'|'VALIDATION'|'OBSERVABILITY'|'REFACTORING'|'SECURITY'|'NETWORKING'|'CONFIGURATION'|'BACKUP'|'OTHER'|null $category
 * @property string|null $description
 * @property string|null $documentIdentifier
 * @property string|null $documentVersion
 * @property array<string, Shapes\SsmExternalParameter>|null $externalParameters
 * @property bool|null $mustSucceedForCutover
 * @property int<1001, 10000>|null $order
 * @property array<string, list<Shapes\SsmParameterStoreParameter>>|null $parameters
 * @property int<1, max>|null $timeoutSeconds
 */
class PutSourceServerActionResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\mgn\PutSourceServerAction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $actionID
 * @property string|null $actionName
 * @property string|null $documentIdentifier
 * @property int<1001, 10000>|null $order
 * @property string|null $documentVersion
 * @property bool|null $active
 * @property int<1, max>|null $timeoutSeconds
 * @property bool|null $mustSucceedForCutover
 * @property array<string, list<Shapes\SsmParameterStoreParameter>>|null $parameters
 * @property array<string, Shapes\SsmExternalParameter>|null $externalParameters
 * @property string|null $description
 * @property 'DISASTER_RECOVERY'|'OPERATING_SYSTEM'|'LICENSE_AND_SUBSCRIPTION'|'VALIDATION'|'OBSERVABILITY'|'REFACTORING'|'SECURITY'|'NETWORKING'|'CONFIGURATION'|'BACKUP'|'OTHER'|null $category
 */
class PutSourceServerActionResponse extends Response
{
}

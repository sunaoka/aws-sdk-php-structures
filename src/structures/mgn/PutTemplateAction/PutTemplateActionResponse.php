<?php

namespace Sunaoka\Aws\Structures\mgn\PutTemplateAction;

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
 * @property string $operatingSystem
 * @property int<1001, 10000> $order
 * @property array<string, list<Shapes\SsmParameterStoreParameter>> $parameters
 * @property int<1, max> $timeoutSeconds
 */
class PutTemplateActionResponse extends Response
{
}

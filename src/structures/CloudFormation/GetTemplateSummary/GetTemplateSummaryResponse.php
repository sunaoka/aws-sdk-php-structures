<?php

namespace Sunaoka\Aws\Structures\CloudFormation\GetTemplateSummary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ParameterDeclaration>|null $Parameters
 * @property string|null $Description
 * @property list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>|null $Capabilities
 * @property string|null $CapabilitiesReason
 * @property list<string>|null $ResourceTypes
 * @property string|null $Version
 * @property string|null $Metadata
 * @property list<string>|null $DeclaredTransforms
 * @property list<Shapes\ResourceIdentifierSummary>|null $ResourceIdentifierSummaries
 * @property Shapes\Warnings|null $Warnings
 */
class GetTemplateSummaryResponse extends Response
{
}

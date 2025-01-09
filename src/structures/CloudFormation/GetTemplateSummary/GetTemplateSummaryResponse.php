<?php

namespace Sunaoka\Aws\Structures\CloudFormation\GetTemplateSummary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ParameterDeclaration> $Parameters
 * @property string $Description
 * @property list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'> $Capabilities
 * @property string $CapabilitiesReason
 * @property list<string> $ResourceTypes
 * @property string $Version
 * @property string $Metadata
 * @property list<string> $DeclaredTransforms
 * @property list<Shapes\ResourceIdentifierSummary> $ResourceIdentifierSummaries
 * @property Shapes\Warnings $Warnings
 */
class GetTemplateSummaryResponse extends Response
{
}

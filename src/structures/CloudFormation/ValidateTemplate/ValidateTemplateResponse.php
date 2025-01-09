<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ValidateTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\TemplateParameter> $Parameters
 * @property string $Description
 * @property list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'> $Capabilities
 * @property string $CapabilitiesReason
 * @property list<string> $DeclaredTransforms
 */
class ValidateTemplateResponse extends Response
{
}

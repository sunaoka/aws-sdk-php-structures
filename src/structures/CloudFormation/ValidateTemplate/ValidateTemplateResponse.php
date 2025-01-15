<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ValidateTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\TemplateParameter>|null $Parameters
 * @property string|null $Description
 * @property list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>|null $Capabilities
 * @property string|null $CapabilitiesReason
 * @property list<string>|null $DeclaredTransforms
 */
class ValidateTemplateResponse extends Response
{
}

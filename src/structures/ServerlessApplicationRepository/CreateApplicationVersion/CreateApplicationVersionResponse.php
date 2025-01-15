<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\CreateApplicationVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationId
 * @property string|null $CreationTime
 * @property list<Shapes\ParameterDefinition>|null $ParameterDefinitions
 * @property list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'|'CAPABILITY_RESOURCE_POLICY'>|null $RequiredCapabilities
 * @property bool|null $ResourcesSupported
 * @property string|null $SemanticVersion
 * @property string|null $SourceCodeArchiveUrl
 * @property string|null $SourceCodeUrl
 * @property string|null $TemplateUrl
 */
class CreateApplicationVersionResponse extends Response
{
}

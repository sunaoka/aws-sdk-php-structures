<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\CreateApplicationVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationId
 * @property string $CreationTime
 * @property list<Shapes\ParameterDefinition> $ParameterDefinitions
 * @property list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'|'CAPABILITY_RESOURCE_POLICY'> $RequiredCapabilities
 * @property bool $ResourcesSupported
 * @property string $SemanticVersion
 * @property string $SourceCodeArchiveUrl
 * @property string $SourceCodeUrl
 * @property string $TemplateUrl
 */
class CreateApplicationVersionResponse extends Response
{
}

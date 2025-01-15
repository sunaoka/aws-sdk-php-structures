<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $CreationTime
 * @property list<ParameterDefinition> $ParameterDefinitions
 * @property list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'|'CAPABILITY_RESOURCE_POLICY'> $RequiredCapabilities
 * @property bool $ResourcesSupported
 * @property string $SemanticVersion
 * @property string|null $SourceCodeArchiveUrl
 * @property string|null $SourceCodeUrl
 * @property string $TemplateUrl
 */
class Version extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     CreationTime: string,
     *     ParameterDefinitions: list<ParameterDefinition>,
     *     RequiredCapabilities: list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'|'CAPABILITY_RESOURCE_POLICY'>,
     *     ResourcesSupported: bool,
     *     SemanticVersion: string,
     *     SourceCodeArchiveUrl?: string|null,
     *     SourceCodeUrl?: string|null,
     *     TemplateUrl: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetProviderService;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $anonymizedOutput
 * @property Shapes\ProviderComponentSchema $providerComponentSchema
 * @property Shapes\Document $providerConfigurationDefinition
 * @property Shapes\ProviderEndpointConfiguration $providerEndpointConfiguration
 * @property Shapes\Document $providerEntityOutputDefinition
 * @property Shapes\ProviderIdNameSpaceConfiguration $providerIdNameSpaceConfiguration
 * @property Shapes\ProviderIntermediateDataAccessConfiguration $providerIntermediateDataAccessConfiguration
 * @property Shapes\Document $providerJobConfiguration
 * @property string $providerName
 * @property string $providerServiceArn
 * @property string $providerServiceDisplayName
 * @property string $providerServiceName
 * @property 'ASSIGNMENT'|'ID_MAPPING' $providerServiceType
 */
class GetProviderServiceResponse extends Response
{
}

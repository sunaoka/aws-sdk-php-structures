<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetProviderService;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $providerName
 * @property string $providerServiceName
 * @property string $providerServiceDisplayName
 * @property 'ASSIGNMENT'|'ID_MAPPING' $providerServiceType
 * @property string $providerServiceArn
 * @property Shapes\Document|null $providerConfigurationDefinition
 * @property Shapes\ProviderIdNameSpaceConfiguration|null $providerIdNameSpaceConfiguration
 * @property Shapes\Document|null $providerJobConfiguration
 * @property Shapes\ProviderEndpointConfiguration $providerEndpointConfiguration
 * @property bool $anonymizedOutput
 * @property Shapes\Document $providerEntityOutputDefinition
 * @property Shapes\ProviderIntermediateDataAccessConfiguration|null $providerIntermediateDataAccessConfiguration
 * @property Shapes\ProviderComponentSchema|null $providerComponentSchema
 */
class GetProviderServiceResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetProviderService;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $anonymizedOutput
 * @property Shapes\ProviderComponentSchema|null $providerComponentSchema
 * @property Shapes\Document|null $providerConfigurationDefinition
 * @property Shapes\ProviderEndpointConfiguration $providerEndpointConfiguration
 * @property Shapes\Document $providerEntityOutputDefinition
 * @property Shapes\ProviderIdNameSpaceConfiguration|null $providerIdNameSpaceConfiguration
 * @property Shapes\ProviderIntermediateDataAccessConfiguration|null $providerIntermediateDataAccessConfiguration
 * @property Shapes\Document|null $providerJobConfiguration
 * @property string $providerName
 * @property string $providerServiceArn
 * @property string $providerServiceDisplayName
 * @property string $providerServiceName
 * @property 'ASSIGNMENT'|'ID_MAPPING' $providerServiceType
 */
class GetProviderServiceResponse extends Response
{
}

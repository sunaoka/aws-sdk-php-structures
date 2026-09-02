<?php

namespace Sunaoka\Aws\Structures\mgn\GetNetworkMigrationDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $networkMigrationDefinitionID
 * @property string|null $name
 * @property string|null $description
 * @property list<Shapes\SourceConfiguration>|null $sourceConfigurations
 * @property Shapes\TargetS3Configuration|null $targetS3Configuration
 * @property Shapes\TargetNetwork|null $targetNetwork
 * @property 'SINGLE_ACCOUNT'|'MULTI_ACCOUNT'|null $targetDeployment
 * @property 'CREATE_NEW'|'USE_EXISTING'|null $vpcProvisioningStrategy
 * @property list<Shapes\CidrMapping>|null $cidrMappings
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property array<string, string>|null $tags
 * @property array<string, string>|null $scopeTags
 */
class GetNetworkMigrationDefinitionResponse extends Response
{
}

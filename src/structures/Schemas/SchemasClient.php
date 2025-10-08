<?php

namespace Sunaoka\Aws\Structures\Schemas;

class SchemasClient extends \Aws\Schemas\SchemasClient
{
    use CreateDiscoverer\CreateDiscovererTrait;
    use CreateRegistry\CreateRegistryTrait;
    use CreateSchema\CreateSchemaTrait;
    use DeleteDiscoverer\DeleteDiscovererTrait;
    use DeleteRegistry\DeleteRegistryTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DeleteSchema\DeleteSchemaTrait;
    use DeleteSchemaVersion\DeleteSchemaVersionTrait;
    use DescribeCodeBinding\DescribeCodeBindingTrait;
    use DescribeDiscoverer\DescribeDiscovererTrait;
    use DescribeRegistry\DescribeRegistryTrait;
    use DescribeSchema\DescribeSchemaTrait;
    use GetCodeBindingSource\GetCodeBindingSourceTrait;
    use GetDiscoveredSchema\GetDiscoveredSchemaTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use ListDiscoverers\ListDiscoverersTrait;
    use ListRegistries\ListRegistriesTrait;
    use ListSchemaVersions\ListSchemaVersionsTrait;
    use ListSchemas\ListSchemasTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutCodeBinding\PutCodeBindingTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use SearchSchemas\SearchSchemasTrait;
    use StartDiscoverer\StartDiscovererTrait;
    use StopDiscoverer\StopDiscovererTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDiscoverer\UpdateDiscovererTrait;
    use UpdateRegistry\UpdateRegistryTrait;
    use UpdateSchema\UpdateSchemaTrait;
    use ExportSchema\ExportSchemaTrait;
}

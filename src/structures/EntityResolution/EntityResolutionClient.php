<?php

namespace Sunaoka\Aws\Structures\EntityResolution;

class EntityResolutionClient extends \Aws\EntityResolution\EntityResolutionClient
{
    use AddPolicyStatement\AddPolicyStatementTrait;
    use BatchDeleteUniqueId\BatchDeleteUniqueIdTrait;
    use CreateIdMappingWorkflow\CreateIdMappingWorkflowTrait;
    use CreateIdNamespace\CreateIdNamespaceTrait;
    use CreateMatchingWorkflow\CreateMatchingWorkflowTrait;
    use CreateSchemaMapping\CreateSchemaMappingTrait;
    use DeleteIdMappingWorkflow\DeleteIdMappingWorkflowTrait;
    use DeleteIdNamespace\DeleteIdNamespaceTrait;
    use DeleteMatchingWorkflow\DeleteMatchingWorkflowTrait;
    use DeletePolicyStatement\DeletePolicyStatementTrait;
    use DeleteSchemaMapping\DeleteSchemaMappingTrait;
    use GenerateMatchId\GenerateMatchIdTrait;
    use GetIdMappingJob\GetIdMappingJobTrait;
    use GetIdMappingWorkflow\GetIdMappingWorkflowTrait;
    use GetIdNamespace\GetIdNamespaceTrait;
    use GetMatchId\GetMatchIdTrait;
    use GetMatchingJob\GetMatchingJobTrait;
    use GetMatchingWorkflow\GetMatchingWorkflowTrait;
    use GetPolicy\GetPolicyTrait;
    use GetProviderService\GetProviderServiceTrait;
    use GetSchemaMapping\GetSchemaMappingTrait;
    use ListIdMappingJobs\ListIdMappingJobsTrait;
    use ListIdMappingWorkflows\ListIdMappingWorkflowsTrait;
    use ListIdNamespaces\ListIdNamespacesTrait;
    use ListMatchingJobs\ListMatchingJobsTrait;
    use ListMatchingWorkflows\ListMatchingWorkflowsTrait;
    use ListProviderServices\ListProviderServicesTrait;
    use ListSchemaMappings\ListSchemaMappingsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutPolicy\PutPolicyTrait;
    use StartIdMappingJob\StartIdMappingJobTrait;
    use StartMatchingJob\StartMatchingJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateIdMappingWorkflow\UpdateIdMappingWorkflowTrait;
    use UpdateIdNamespace\UpdateIdNamespaceTrait;
    use UpdateMatchingWorkflow\UpdateMatchingWorkflowTrait;
    use UpdateSchemaMapping\UpdateSchemaMappingTrait;
}

<?php

namespace Sunaoka\Aws\Structures\EntityResolution;

class EntityResolutionClient extends \Aws\EntityResolution\EntityResolutionClient
{
    use CreateMatchingWorkflow\CreateMatchingWorkflowTrait;
    use CreateSchemaMapping\CreateSchemaMappingTrait;
    use DeleteMatchingWorkflow\DeleteMatchingWorkflowTrait;
    use DeleteSchemaMapping\DeleteSchemaMappingTrait;
    use GetMatchId\GetMatchIdTrait;
    use GetMatchingJob\GetMatchingJobTrait;
    use GetMatchingWorkflow\GetMatchingWorkflowTrait;
    use GetSchemaMapping\GetSchemaMappingTrait;
    use ListMatchingJobs\ListMatchingJobsTrait;
    use ListMatchingWorkflows\ListMatchingWorkflowsTrait;
    use ListSchemaMappings\ListSchemaMappingsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartMatchingJob\StartMatchingJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateMatchingWorkflow\UpdateMatchingWorkflowTrait;
}

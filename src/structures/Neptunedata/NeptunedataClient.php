<?php

namespace Sunaoka\Aws\Structures\Neptunedata;

class NeptunedataClient extends \Aws\Neptunedata\NeptunedataClient
{
    use CancelGremlinQuery\CancelGremlinQueryTrait;
    use CancelLoaderJob\CancelLoaderJobTrait;
    use CancelMLDataProcessingJob\CancelMLDataProcessingJobTrait;
    use CancelMLModelTrainingJob\CancelMLModelTrainingJobTrait;
    use CancelMLModelTransformJob\CancelMLModelTransformJobTrait;
    use CancelOpenCypherQuery\CancelOpenCypherQueryTrait;
    use CreateMLEndpoint\CreateMLEndpointTrait;
    use DeleteMLEndpoint\DeleteMLEndpointTrait;
    use DeletePropertygraphStatistics\DeletePropertygraphStatisticsTrait;
    use DeleteSparqlStatistics\DeleteSparqlStatisticsTrait;
    use ExecuteFastReset\ExecuteFastResetTrait;
    use ExecuteGremlinExplainQuery\ExecuteGremlinExplainQueryTrait;
    use ExecuteGremlinProfileQuery\ExecuteGremlinProfileQueryTrait;
    use ExecuteGremlinQuery\ExecuteGremlinQueryTrait;
    use ExecuteOpenCypherExplainQuery\ExecuteOpenCypherExplainQueryTrait;
    use ExecuteOpenCypherQuery\ExecuteOpenCypherQueryTrait;
    use GetEngineStatus\GetEngineStatusTrait;
    use GetGremlinQueryStatus\GetGremlinQueryStatusTrait;
    use GetLoaderJobStatus\GetLoaderJobStatusTrait;
    use GetMLDataProcessingJob\GetMLDataProcessingJobTrait;
    use GetMLEndpoint\GetMLEndpointTrait;
    use GetMLModelTrainingJob\GetMLModelTrainingJobTrait;
    use GetMLModelTransformJob\GetMLModelTransformJobTrait;
    use GetOpenCypherQueryStatus\GetOpenCypherQueryStatusTrait;
    use GetPropertygraphStatistics\GetPropertygraphStatisticsTrait;
    use GetPropertygraphStream\GetPropertygraphStreamTrait;
    use GetPropertygraphSummary\GetPropertygraphSummaryTrait;
    use GetRDFGraphSummary\GetRDFGraphSummaryTrait;
    use GetSparqlStatistics\GetSparqlStatisticsTrait;
    use GetSparqlStream\GetSparqlStreamTrait;
    use ListGremlinQueries\ListGremlinQueriesTrait;
    use ListLoaderJobs\ListLoaderJobsTrait;
    use ListMLDataProcessingJobs\ListMLDataProcessingJobsTrait;
    use ListMLEndpoints\ListMLEndpointsTrait;
    use ListMLModelTrainingJobs\ListMLModelTrainingJobsTrait;
    use ListMLModelTransformJobs\ListMLModelTransformJobsTrait;
    use ListOpenCypherQueries\ListOpenCypherQueriesTrait;
    use ManagePropertygraphStatistics\ManagePropertygraphStatisticsTrait;
    use ManageSparqlStatistics\ManageSparqlStatisticsTrait;
    use StartLoaderJob\StartLoaderJobTrait;
    use StartMLDataProcessingJob\StartMLDataProcessingJobTrait;
    use StartMLModelTrainingJob\StartMLModelTrainingJobTrait;
    use StartMLModelTransformJob\StartMLModelTransformJobTrait;
}

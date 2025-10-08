<?php

namespace Sunaoka\Aws\Structures\MachineLearning;

class MachineLearningClient extends \Aws\MachineLearning\MachineLearningClient
{
    use AddTags\AddTagsTrait;
    use CreateBatchPrediction\CreateBatchPredictionTrait;
    use CreateDataSourceFromRDS\CreateDataSourceFromRDSTrait;
    use CreateDataSourceFromRedshift\CreateDataSourceFromRedshiftTrait;
    use CreateDataSourceFromS3\CreateDataSourceFromS3Trait;
    use CreateEvaluation\CreateEvaluationTrait;
    use CreateMLModel\CreateMLModelTrait;
    use CreateRealtimeEndpoint\CreateRealtimeEndpointTrait;
    use DeleteBatchPrediction\DeleteBatchPredictionTrait;
    use DeleteDataSource\DeleteDataSourceTrait;
    use DeleteEvaluation\DeleteEvaluationTrait;
    use DeleteMLModel\DeleteMLModelTrait;
    use DeleteRealtimeEndpoint\DeleteRealtimeEndpointTrait;
    use DeleteTags\DeleteTagsTrait;
    use DescribeBatchPredictions\DescribeBatchPredictionsTrait;
    use DescribeDataSources\DescribeDataSourcesTrait;
    use DescribeEvaluations\DescribeEvaluationsTrait;
    use DescribeMLModels\DescribeMLModelsTrait;
    use DescribeTags\DescribeTagsTrait;
    use GetBatchPrediction\GetBatchPredictionTrait;
    use GetDataSource\GetDataSourceTrait;
    use GetEvaluation\GetEvaluationTrait;
    use GetMLModel\GetMLModelTrait;
    use Predict\PredictTrait;
    use UpdateBatchPrediction\UpdateBatchPredictionTrait;
    use UpdateDataSource\UpdateDataSourceTrait;
    use UpdateEvaluation\UpdateEvaluationTrait;
    use UpdateMLModel\UpdateMLModelTrait;
}

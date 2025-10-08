<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical;

class ComprehendMedicalClient extends \Aws\ComprehendMedical\ComprehendMedicalClient
{
    use DescribeEntitiesDetectionV2Job\DescribeEntitiesDetectionV2JobTrait;
    use DescribeICD10CMInferenceJob\DescribeICD10CMInferenceJobTrait;
    use DescribePHIDetectionJob\DescribePHIDetectionJobTrait;
    use DescribeRxNormInferenceJob\DescribeRxNormInferenceJobTrait;
    use DescribeSNOMEDCTInferenceJob\DescribeSNOMEDCTInferenceJobTrait;
    use DetectEntities\DetectEntitiesTrait;
    use DetectEntitiesV2\DetectEntitiesV2Trait;
    use DetectPHI\DetectPHITrait;
    use InferICD10CM\InferICD10CMTrait;
    use InferRxNorm\InferRxNormTrait;
    use InferSNOMEDCT\InferSNOMEDCTTrait;
    use ListEntitiesDetectionV2Jobs\ListEntitiesDetectionV2JobsTrait;
    use ListICD10CMInferenceJobs\ListICD10CMInferenceJobsTrait;
    use ListPHIDetectionJobs\ListPHIDetectionJobsTrait;
    use ListRxNormInferenceJobs\ListRxNormInferenceJobsTrait;
    use ListSNOMEDCTInferenceJobs\ListSNOMEDCTInferenceJobsTrait;
    use StartEntitiesDetectionV2Job\StartEntitiesDetectionV2JobTrait;
    use StartICD10CMInferenceJob\StartICD10CMInferenceJobTrait;
    use StartPHIDetectionJob\StartPHIDetectionJobTrait;
    use StartRxNormInferenceJob\StartRxNormInferenceJobTrait;
    use StartSNOMEDCTInferenceJob\StartSNOMEDCTInferenceJobTrait;
    use StopEntitiesDetectionV2Job\StopEntitiesDetectionV2JobTrait;
    use StopICD10CMInferenceJob\StopICD10CMInferenceJobTrait;
    use StopPHIDetectionJob\StopPHIDetectionJobTrait;
    use StopRxNormInferenceJob\StopRxNormInferenceJobTrait;
    use StopSNOMEDCTInferenceJob\StopSNOMEDCTInferenceJobTrait;
}

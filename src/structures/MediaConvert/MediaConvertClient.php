<?php

namespace Sunaoka\Aws\Structures\MediaConvert;

class MediaConvertClient extends \Aws\MediaConvert\MediaConvertClient
{
    use AssociateCertificate\AssociateCertificateTrait;
    use CancelJob\CancelJobTrait;
    use CreateJob\CreateJobTrait;
    use CreateJobTemplate\CreateJobTemplateTrait;
    use CreatePreset\CreatePresetTrait;
    use CreateQueue\CreateQueueTrait;
    use CreateResourceShare\CreateResourceShareTrait;
    use DeleteJobTemplate\DeleteJobTemplateTrait;
    use DeletePolicy\DeletePolicyTrait;
    use DeletePreset\DeletePresetTrait;
    use DeleteQueue\DeleteQueueTrait;
    use DescribeEndpoints\DescribeEndpointsTrait;
    use DisassociateCertificate\DisassociateCertificateTrait;
    use GetJob\GetJobTrait;
    use GetJobTemplate\GetJobTemplateTrait;
    use GetPolicy\GetPolicyTrait;
    use GetPreset\GetPresetTrait;
    use GetQueue\GetQueueTrait;
    use ListJobTemplates\ListJobTemplatesTrait;
    use ListJobs\ListJobsTrait;
    use ListPresets\ListPresetsTrait;
    use ListQueues\ListQueuesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListVersions\ListVersionsTrait;
    use Probe\ProbeTrait;
    use PutPolicy\PutPolicyTrait;
    use SearchJobs\SearchJobsTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateJobTemplate\UpdateJobTemplateTrait;
    use UpdatePreset\UpdatePresetTrait;
    use UpdateQueue\UpdateQueueTrait;
}

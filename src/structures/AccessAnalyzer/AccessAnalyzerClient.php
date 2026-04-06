<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer;

class AccessAnalyzerClient extends \Aws\AccessAnalyzer\AccessAnalyzerClient
{
    use ApplyArchiveRule\ApplyArchiveRuleTrait;
    use CancelPolicyGeneration\CancelPolicyGenerationTrait;
    use CreateAccessPreview\CreateAccessPreviewTrait;
    use CreateAnalyzer\CreateAnalyzerTrait;
    use CreateArchiveRule\CreateArchiveRuleTrait;
    use DeleteAnalyzer\DeleteAnalyzerTrait;
    use DeleteArchiveRule\DeleteArchiveRuleTrait;
    use GetAccessPreview\GetAccessPreviewTrait;
    use GetAnalyzedResource\GetAnalyzedResourceTrait;
    use GetAnalyzer\GetAnalyzerTrait;
    use GetArchiveRule\GetArchiveRuleTrait;
    use GetFinding\GetFindingTrait;
    use GetGeneratedPolicy\GetGeneratedPolicyTrait;
    use ListAccessPreviewFindings\ListAccessPreviewFindingsTrait;
    use ListAccessPreviews\ListAccessPreviewsTrait;
    use ListAnalyzedResources\ListAnalyzedResourcesTrait;
    use ListAnalyzers\ListAnalyzersTrait;
    use ListArchiveRules\ListArchiveRulesTrait;
    use ListFindings\ListFindingsTrait;
    use ListPolicyGenerations\ListPolicyGenerationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartPolicyGeneration\StartPolicyGenerationTrait;
    use StartResourceScan\StartResourceScanTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateArchiveRule\UpdateArchiveRuleTrait;
    use UpdateFindings\UpdateFindingsTrait;
    use ValidatePolicy\ValidatePolicyTrait;
}

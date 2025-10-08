<?php

namespace Sunaoka\Aws\Structures\CloudSearch;

class CloudSearchClient extends \Aws\CloudSearch\CloudSearchClient
{
    use BuildSuggesters\BuildSuggestersTrait;
    use CreateDomain\CreateDomainTrait;
    use DefineAnalysisScheme\DefineAnalysisSchemeTrait;
    use DefineExpression\DefineExpressionTrait;
    use DefineIndexField\DefineIndexFieldTrait;
    use DefineSuggester\DefineSuggesterTrait;
    use DeleteAnalysisScheme\DeleteAnalysisSchemeTrait;
    use DeleteDomain\DeleteDomainTrait;
    use DeleteExpression\DeleteExpressionTrait;
    use DeleteIndexField\DeleteIndexFieldTrait;
    use DeleteSuggester\DeleteSuggesterTrait;
    use DescribeAnalysisSchemes\DescribeAnalysisSchemesTrait;
    use DescribeAvailabilityOptions\DescribeAvailabilityOptionsTrait;
    use DescribeDomainEndpointOptions\DescribeDomainEndpointOptionsTrait;
    use DescribeDomains\DescribeDomainsTrait;
    use DescribeExpressions\DescribeExpressionsTrait;
    use DescribeIndexFields\DescribeIndexFieldsTrait;
    use DescribeScalingParameters\DescribeScalingParametersTrait;
    use DescribeServiceAccessPolicies\DescribeServiceAccessPoliciesTrait;
    use DescribeSuggesters\DescribeSuggestersTrait;
    use IndexDocuments\IndexDocumentsTrait;
    use ListDomainNames\ListDomainNamesTrait;
    use UpdateAvailabilityOptions\UpdateAvailabilityOptionsTrait;
    use UpdateDomainEndpointOptions\UpdateDomainEndpointOptionsTrait;
    use UpdateScalingParameters\UpdateScalingParametersTrait;
    use UpdateServiceAccessPolicies\UpdateServiceAccessPoliciesTrait;
}

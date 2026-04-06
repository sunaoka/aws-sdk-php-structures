<?php

namespace Sunaoka\Aws\Structures\PrometheusService;

class PrometheusServiceClient extends \Aws\PrometheusService\PrometheusServiceClient
{
    use CreateAlertManagerDefinition\CreateAlertManagerDefinitionTrait;
    use CreateLoggingConfiguration\CreateLoggingConfigurationTrait;
    use CreateRuleGroupsNamespace\CreateRuleGroupsNamespaceTrait;
    use CreateScraper\CreateScraperTrait;
    use CreateWorkspace\CreateWorkspaceTrait;
    use DeleteAlertManagerDefinition\DeleteAlertManagerDefinitionTrait;
    use DeleteLoggingConfiguration\DeleteLoggingConfigurationTrait;
    use DeleteRuleGroupsNamespace\DeleteRuleGroupsNamespaceTrait;
    use DeleteScraper\DeleteScraperTrait;
    use DeleteWorkspace\DeleteWorkspaceTrait;
    use DescribeAlertManagerDefinition\DescribeAlertManagerDefinitionTrait;
    use DescribeLoggingConfiguration\DescribeLoggingConfigurationTrait;
    use DescribeRuleGroupsNamespace\DescribeRuleGroupsNamespaceTrait;
    use DescribeScraper\DescribeScraperTrait;
    use DescribeWorkspace\DescribeWorkspaceTrait;
    use GetDefaultScraperConfiguration\GetDefaultScraperConfigurationTrait;
    use ListRuleGroupsNamespaces\ListRuleGroupsNamespacesTrait;
    use ListScrapers\ListScrapersTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListWorkspaces\ListWorkspacesTrait;
    use PutAlertManagerDefinition\PutAlertManagerDefinitionTrait;
    use PutRuleGroupsNamespace\PutRuleGroupsNamespaceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateLoggingConfiguration\UpdateLoggingConfigurationTrait;
    use UpdateWorkspaceAlias\UpdateWorkspaceAliasTrait;
}

<?php

namespace Sunaoka\Aws\Structures\PrometheusService;

class PrometheusServiceClient extends \Aws\PrometheusService\PrometheusServiceClient
{
    use CreateAlertManagerDefinition\CreateAlertManagerDefinitionTrait;
    use CreateLoggingConfiguration\CreateLoggingConfigurationTrait;
    use CreateQueryLoggingConfiguration\CreateQueryLoggingConfigurationTrait;
    use CreateRuleGroupsNamespace\CreateRuleGroupsNamespaceTrait;
    use CreateScraper\CreateScraperTrait;
    use CreateWorkspace\CreateWorkspaceTrait;
    use DeleteAlertManagerDefinition\DeleteAlertManagerDefinitionTrait;
    use DeleteLoggingConfiguration\DeleteLoggingConfigurationTrait;
    use DeleteQueryLoggingConfiguration\DeleteQueryLoggingConfigurationTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DeleteRuleGroupsNamespace\DeleteRuleGroupsNamespaceTrait;
    use DeleteScraper\DeleteScraperTrait;
    use DeleteScraperLoggingConfiguration\DeleteScraperLoggingConfigurationTrait;
    use DeleteWorkspace\DeleteWorkspaceTrait;
    use DescribeAlertManagerDefinition\DescribeAlertManagerDefinitionTrait;
    use DescribeLoggingConfiguration\DescribeLoggingConfigurationTrait;
    use DescribeQueryLoggingConfiguration\DescribeQueryLoggingConfigurationTrait;
    use DescribeResourcePolicy\DescribeResourcePolicyTrait;
    use DescribeRuleGroupsNamespace\DescribeRuleGroupsNamespaceTrait;
    use DescribeScraper\DescribeScraperTrait;
    use DescribeScraperLoggingConfiguration\DescribeScraperLoggingConfigurationTrait;
    use DescribeWorkspace\DescribeWorkspaceTrait;
    use DescribeWorkspaceConfiguration\DescribeWorkspaceConfigurationTrait;
    use GetDefaultScraperConfiguration\GetDefaultScraperConfigurationTrait;
    use ListRuleGroupsNamespaces\ListRuleGroupsNamespacesTrait;
    use ListScrapers\ListScrapersTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListWorkspaces\ListWorkspacesTrait;
    use PutAlertManagerDefinition\PutAlertManagerDefinitionTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use PutRuleGroupsNamespace\PutRuleGroupsNamespaceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateLoggingConfiguration\UpdateLoggingConfigurationTrait;
    use UpdateQueryLoggingConfiguration\UpdateQueryLoggingConfigurationTrait;
    use UpdateScraper\UpdateScraperTrait;
    use UpdateScraperLoggingConfiguration\UpdateScraperLoggingConfigurationTrait;
    use UpdateWorkspaceAlias\UpdateWorkspaceAliasTrait;
    use UpdateWorkspaceConfiguration\UpdateWorkspaceConfigurationTrait;
}

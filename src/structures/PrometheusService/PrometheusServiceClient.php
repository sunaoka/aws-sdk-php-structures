<?php

namespace Sunaoka\Aws\Structures\PrometheusService;

class PrometheusServiceClient extends \Aws\PrometheusService\PrometheusServiceClient
{
    use CreateAlertManagerDefinition\CreateAlertManagerDefinitionTrait;
    use CreateLoggingConfiguration\CreateLoggingConfigurationTrait;
    use CreateRuleGroupsNamespace\CreateRuleGroupsNamespaceTrait;
    use CreateWorkspace\CreateWorkspaceTrait;
    use DeleteAlertManagerDefinition\DeleteAlertManagerDefinitionTrait;
    use DeleteLoggingConfiguration\DeleteLoggingConfigurationTrait;
    use DeleteRuleGroupsNamespace\DeleteRuleGroupsNamespaceTrait;
    use DeleteWorkspace\DeleteWorkspaceTrait;
    use DescribeAlertManagerDefinition\DescribeAlertManagerDefinitionTrait;
    use DescribeLoggingConfiguration\DescribeLoggingConfigurationTrait;
    use DescribeRuleGroupsNamespace\DescribeRuleGroupsNamespaceTrait;
    use DescribeWorkspace\DescribeWorkspaceTrait;
    use ListRuleGroupsNamespaces\ListRuleGroupsNamespacesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListWorkspaces\ListWorkspacesTrait;
    use PutAlertManagerDefinition\PutAlertManagerDefinitionTrait;
    use PutRuleGroupsNamespace\PutRuleGroupsNamespaceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateLoggingConfiguration\UpdateLoggingConfigurationTrait;
    use UpdateWorkspaceAlias\UpdateWorkspaceAliasTrait;
}

<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana;

class ManagedGrafanaClient extends \Aws\ManagedGrafana\ManagedGrafanaClient
{
    use AssociateLicense\AssociateLicenseTrait;
    use CreateWorkspace\CreateWorkspaceTrait;
    use CreateWorkspaceApiKey\CreateWorkspaceApiKeyTrait;
    use CreateWorkspaceServiceAccount\CreateWorkspaceServiceAccountTrait;
    use CreateWorkspaceServiceAccountToken\CreateWorkspaceServiceAccountTokenTrait;
    use DeleteWorkspace\DeleteWorkspaceTrait;
    use DeleteWorkspaceApiKey\DeleteWorkspaceApiKeyTrait;
    use DeleteWorkspaceServiceAccount\DeleteWorkspaceServiceAccountTrait;
    use DeleteWorkspaceServiceAccountToken\DeleteWorkspaceServiceAccountTokenTrait;
    use DescribeWorkspace\DescribeWorkspaceTrait;
    use DescribeWorkspaceAuthentication\DescribeWorkspaceAuthenticationTrait;
    use DescribeWorkspaceConfiguration\DescribeWorkspaceConfigurationTrait;
    use DisassociateLicense\DisassociateLicenseTrait;
    use ListPermissions\ListPermissionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListVersions\ListVersionsTrait;
    use ListWorkspaceServiceAccountTokens\ListWorkspaceServiceAccountTokensTrait;
    use ListWorkspaceServiceAccounts\ListWorkspaceServiceAccountsTrait;
    use ListWorkspaces\ListWorkspacesTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdatePermissions\UpdatePermissionsTrait;
    use UpdateWorkspace\UpdateWorkspaceTrait;
    use UpdateWorkspaceAuthentication\UpdateWorkspaceAuthenticationTrait;
    use UpdateWorkspaceConfiguration\UpdateWorkspaceConfigurationTrait;
}

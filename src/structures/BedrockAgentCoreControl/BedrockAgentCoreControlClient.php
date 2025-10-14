<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl;

class BedrockAgentCoreControlClient extends \Aws\BedrockAgentCoreControl\BedrockAgentCoreControlClient
{
    use CreateAgentRuntime\CreateAgentRuntimeTrait;
    use CreateAgentRuntimeEndpoint\CreateAgentRuntimeEndpointTrait;
    use CreateApiKeyCredentialProvider\CreateApiKeyCredentialProviderTrait;
    use CreateBrowser\CreateBrowserTrait;
    use CreateCodeInterpreter\CreateCodeInterpreterTrait;
    use CreateGateway\CreateGatewayTrait;
    use CreateGatewayTarget\CreateGatewayTargetTrait;
    use CreateMemory\CreateMemoryTrait;
    use CreateOauth2CredentialProvider\CreateOauth2CredentialProviderTrait;
    use CreateWorkloadIdentity\CreateWorkloadIdentityTrait;
    use DeleteAgentRuntime\DeleteAgentRuntimeTrait;
    use DeleteAgentRuntimeEndpoint\DeleteAgentRuntimeEndpointTrait;
    use DeleteApiKeyCredentialProvider\DeleteApiKeyCredentialProviderTrait;
    use DeleteBrowser\DeleteBrowserTrait;
    use DeleteCodeInterpreter\DeleteCodeInterpreterTrait;
    use DeleteGateway\DeleteGatewayTrait;
    use DeleteGatewayTarget\DeleteGatewayTargetTrait;
    use DeleteMemory\DeleteMemoryTrait;
    use DeleteOauth2CredentialProvider\DeleteOauth2CredentialProviderTrait;
    use DeleteWorkloadIdentity\DeleteWorkloadIdentityTrait;
    use GetAgentRuntime\GetAgentRuntimeTrait;
    use GetAgentRuntimeEndpoint\GetAgentRuntimeEndpointTrait;
    use GetApiKeyCredentialProvider\GetApiKeyCredentialProviderTrait;
    use GetBrowser\GetBrowserTrait;
    use GetCodeInterpreter\GetCodeInterpreterTrait;
    use GetGateway\GetGatewayTrait;
    use GetGatewayTarget\GetGatewayTargetTrait;
    use GetMemory\GetMemoryTrait;
    use GetOauth2CredentialProvider\GetOauth2CredentialProviderTrait;
    use GetTokenVault\GetTokenVaultTrait;
    use GetWorkloadIdentity\GetWorkloadIdentityTrait;
    use ListAgentRuntimeEndpoints\ListAgentRuntimeEndpointsTrait;
    use ListAgentRuntimeVersions\ListAgentRuntimeVersionsTrait;
    use ListAgentRuntimes\ListAgentRuntimesTrait;
    use ListApiKeyCredentialProviders\ListApiKeyCredentialProvidersTrait;
    use ListBrowsers\ListBrowsersTrait;
    use ListCodeInterpreters\ListCodeInterpretersTrait;
    use ListGatewayTargets\ListGatewayTargetsTrait;
    use ListGateways\ListGatewaysTrait;
    use ListMemories\ListMemoriesTrait;
    use ListOauth2CredentialProviders\ListOauth2CredentialProvidersTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListWorkloadIdentities\ListWorkloadIdentitiesTrait;
    use SetTokenVaultCMK\SetTokenVaultCMKTrait;
    use SynchronizeGatewayTargets\SynchronizeGatewayTargetsTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAgentRuntime\UpdateAgentRuntimeTrait;
    use UpdateAgentRuntimeEndpoint\UpdateAgentRuntimeEndpointTrait;
    use UpdateApiKeyCredentialProvider\UpdateApiKeyCredentialProviderTrait;
    use UpdateGateway\UpdateGatewayTrait;
    use UpdateGatewayTarget\UpdateGatewayTargetTrait;
    use UpdateMemory\UpdateMemoryTrait;
    use UpdateOauth2CredentialProvider\UpdateOauth2CredentialProviderTrait;
    use UpdateWorkloadIdentity\UpdateWorkloadIdentityTrait;
}

<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni;

class CloudWatchOmniClient extends \Aws\CloudWatchOmni\CloudWatchOmniClient
{
    use CreateAccessGrant\CreateAccessGrantTrait;
    use CreateAccessProfile\CreateAccessProfileTrait;
    use CreateAlert\CreateAlertTrait;
    use CreateDomain\CreateDomainTrait;
    use CreateDomainAccessGrantForOrganization\CreateDomainAccessGrantForOrganizationTrait;
    use CreateDomainForOrganization\CreateDomainForOrganizationTrait;
    use CreateIntegration\CreateIntegrationTrait;
    use CreateOmniDashboard\CreateOmniDashboardTrait;
    use CreateOneTimeDeepLinkCode\CreateOneTimeDeepLinkCodeTrait;
    use CreateSpace\CreateSpaceTrait;
    use CreateView\CreateViewTrait;
    use DeleteAccessGrant\DeleteAccessGrantTrait;
    use DeleteAccessProfile\DeleteAccessProfileTrait;
    use DeleteAlert\DeleteAlertTrait;
    use DeleteDomain\DeleteDomainTrait;
    use DeleteDomainAccessGrantForOrganization\DeleteDomainAccessGrantForOrganizationTrait;
    use DeleteDomainForOrganization\DeleteDomainForOrganizationTrait;
    use DeleteIntegration\DeleteIntegrationTrait;
    use DeleteOmniDashboard\DeleteOmniDashboardTrait;
    use DeleteSpace\DeleteSpaceTrait;
    use DeleteView\DeleteViewTrait;
    use GetAccessGrant\GetAccessGrantTrait;
    use GetAccessProfile\GetAccessProfileTrait;
    use GetAlert\GetAlertTrait;
    use GetContextGraph\GetContextGraphTrait;
    use GetDomain\GetDomainTrait;
    use GetDomainAccessGrantForOrganization\GetDomainAccessGrantForOrganizationTrait;
    use GetDomainForOrganization\GetDomainForOrganizationTrait;
    use GetIntegration\GetIntegrationTrait;
    use GetIntelligenceConfiguration\GetIntelligenceConfigurationTrait;
    use GetOmniDashboard\GetOmniDashboardTrait;
    use GetSpace\GetSpaceTrait;
    use GetSpaceCredentialsForOrganization\GetSpaceCredentialsForOrganizationTrait;
    use GetTelemetryQueryResults\GetTelemetryQueryResultsTrait;
    use GetView\GetViewTrait;
    use ListAccessGrants\ListAccessGrantsTrait;
    use ListAccessProfiles\ListAccessProfilesTrait;
    use ListAlerts\ListAlertsTrait;
    use ListDomainAccessGrantsForOrganization\ListDomainAccessGrantsForOrganizationTrait;
    use ListDomains\ListDomainsTrait;
    use ListIntegrations\ListIntegrationsTrait;
    use ListOmniDashboards\ListOmniDashboardsTrait;
    use ListSpaces\ListSpacesTrait;
    use ListSpacesForOrganization\ListSpacesForOrganizationTrait;
    use ListTelemetryFields\ListTelemetryFieldsTrait;
    use ListTelemetryQuerySessions\ListTelemetryQuerySessionsTrait;
    use ListViews\ListViewsTrait;
    use PutIntelligenceConfiguration\PutIntelligenceConfigurationTrait;
    use SearchPrincipals\SearchPrincipalsTrait;
    use StartTelemetryQuery\StartTelemetryQueryTrait;
    use StartTelemetryQuerySession\StartTelemetryQuerySessionTrait;
    use StopTelemetryQuery\StopTelemetryQueryTrait;
    use StopTelemetryQuerySession\StopTelemetryQuerySessionTrait;
    use UpdateAccessProfile\UpdateAccessProfileTrait;
    use UpdateAlert\UpdateAlertTrait;
    use UpdateDomain\UpdateDomainTrait;
    use UpdateDomainForOrganization\UpdateDomainForOrganizationTrait;
    use UpdateIntegration\UpdateIntegrationTrait;
    use UpdateOmniDashboard\UpdateOmniDashboardTrait;
    use UpdateSpace\UpdateSpaceTrait;
    use UpdateView\UpdateViewTrait;
}

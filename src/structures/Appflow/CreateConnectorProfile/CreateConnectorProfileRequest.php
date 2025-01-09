<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectorProfileName
 * @property string $kmsArn
 * @property 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot' $connectorType
 * @property string $connectorLabel
 * @property 'Public'|'Private' $connectionMode
 * @property Shapes\ConnectorProfileConfig $connectorProfileConfig
 * @property string $clientToken
 */
class CreateConnectorProfileRequest extends Request
{
    /**
     * @param array{
     *     connectorProfileName: string,
     *     kmsArn?: string,
     *     connectorType: 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot',
     *     connectorLabel?: string,
     *     connectionMode: 'Public'|'Private',
     *     connectorProfileConfig: Shapes\ConnectorProfileConfig,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

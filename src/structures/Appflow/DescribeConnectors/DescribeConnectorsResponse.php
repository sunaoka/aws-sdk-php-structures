<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectors;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot', Shapes\ConnectorConfiguration>|null $connectorConfigurations
 * @property list<Shapes\ConnectorDetail>|null $connectors
 * @property string|null $nextToken
 */
class DescribeConnectorsResponse extends Response
{
}

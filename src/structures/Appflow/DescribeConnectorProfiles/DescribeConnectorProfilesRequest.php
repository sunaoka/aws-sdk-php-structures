<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectorProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $connectorProfileNames
 * @property 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot'|null $connectorType
 * @property string|null $connectorLabel
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class DescribeConnectorProfilesRequest extends Request
{
    /**
     * @param array{
     *     connectorProfileNames?: list<string>|null,
     *     connectorType?: 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot'|null,
     *     connectorLabel?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

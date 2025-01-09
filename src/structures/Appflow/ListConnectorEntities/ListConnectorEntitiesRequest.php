<?php

namespace Sunaoka\Aws\Structures\Appflow\ListConnectorEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectorProfileName
 * @property 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot' $connectorType
 * @property string $entitiesPath
 * @property string $apiVersion
 * @property int<1, 10000> $maxResults
 * @property string $nextToken
 */
class ListConnectorEntitiesRequest extends Request
{
    /**
     * @param array{
     *     connectorProfileName?: string,
     *     connectorType?: 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot',
     *     entitiesPath?: string,
     *     apiVersion?: string,
     *     maxResults?: int<1, 10000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

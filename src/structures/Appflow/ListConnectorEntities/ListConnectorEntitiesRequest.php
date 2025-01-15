<?php

namespace Sunaoka\Aws\Structures\Appflow\ListConnectorEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $connectorProfileName
 * @property 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot'|null $connectorType
 * @property string|null $entitiesPath
 * @property string|null $apiVersion
 * @property int<1, 10000>|null $maxResults
 * @property string|null $nextToken
 */
class ListConnectorEntitiesRequest extends Request
{
    /**
     * @param array{
     *     connectorProfileName?: string|null,
     *     connectorType?: 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot'|null,
     *     entitiesPath?: string|null,
     *     apiVersion?: string|null,
     *     maxResults?: int<1, 10000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

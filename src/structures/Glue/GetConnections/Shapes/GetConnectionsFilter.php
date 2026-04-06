<?php

namespace Sunaoka\Aws\Structures\Glue\GetConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $MatchCriteria
 * @property 'JDBC'|'SFTP'|'MONGODB'|'KAFKA'|'NETWORK'|'MARKETPLACE'|'CUSTOM'|'SALESFORCE'|'VIEW_VALIDATION_REDSHIFT'|'VIEW_VALIDATION_ATHENA'|'GOOGLEADS'|'GOOGLESHEETS'|'GOOGLEANALYTICS4'|'SERVICENOW'|'MARKETO'|'SAPODATA'|'ZENDESK'|'JIRACLOUD'|'NETSUITEERP'|'HUBSPOT'|'FACEBOOKADS'|'INSTAGRAMADS'|'ZOHOCRM'|'SALESFORCEPARDOT'|'SALESFORCEMARKETINGCLOUD'|'SLACK'|'STRIPE'|'INTERCOM'|'SNAPCHATADS'|null $ConnectionType
 * @property int<1, 2>|null $ConnectionSchemaVersion
 */
class GetConnectionsFilter extends Shape
{
    /**
     * @param array{
     *     MatchCriteria?: list<string>|null,
     *     ConnectionType?: 'JDBC'|'SFTP'|'MONGODB'|'KAFKA'|'NETWORK'|'MARKETPLACE'|'CUSTOM'|'SALESFORCE'|'VIEW_VALIDATION_REDSHIFT'|'VIEW_VALIDATION_ATHENA'|'GOOGLEADS'|'GOOGLESHEETS'|'GOOGLEANALYTICS4'|'SERVICENOW'|'MARKETO'|'SAPODATA'|'ZENDESK'|'JIRACLOUD'|'NETSUITEERP'|'HUBSPOT'|'FACEBOOKADS'|'INSTAGRAMADS'|'ZOHOCRM'|'SALESFORCEPARDOT'|'SALESFORCEMARKETINGCLOUD'|'SLACK'|'STRIPE'|'INTERCOM'|'SNAPCHATADS'|null,
     *     ConnectionSchemaVersion?: int<1, 2>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

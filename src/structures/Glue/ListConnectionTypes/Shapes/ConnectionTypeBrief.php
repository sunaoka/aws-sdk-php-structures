<?php

namespace Sunaoka\Aws\Structures\Glue\ListConnectionTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JDBC'|'SFTP'|'MONGODB'|'KAFKA'|'NETWORK'|'MARKETPLACE'|'CUSTOM'|'SALESFORCE'|'VIEW_VALIDATION_REDSHIFT'|'VIEW_VALIDATION_ATHENA'|'GOOGLEADS'|'GOOGLESHEETS'|'GOOGLEANALYTICS4'|'SERVICENOW'|'MARKETO'|'SAPODATA'|'ZENDESK'|'JIRACLOUD'|'NETSUITEERP'|'HUBSPOT'|'FACEBOOKADS'|'INSTAGRAMADS'|'ZOHOCRM'|'SALESFORCEPARDOT'|'SALESFORCEMARKETINGCLOUD'|'SLACK'|'STRIPE'|'INTERCOM'|'SNAPCHATADS' $ConnectionType
 * @property string $Description
 * @property Capabilities $Capabilities
 */
class ConnectionTypeBrief extends Shape
{
    /**
     * @param array{
     *     ConnectionType?: 'JDBC'|'SFTP'|'MONGODB'|'KAFKA'|'NETWORK'|'MARKETPLACE'|'CUSTOM'|'SALESFORCE'|'VIEW_VALIDATION_REDSHIFT'|'VIEW_VALIDATION_ATHENA'|'GOOGLEADS'|'GOOGLESHEETS'|'GOOGLEANALYTICS4'|'SERVICENOW'|'MARKETO'|'SAPODATA'|'ZENDESK'|'JIRACLOUD'|'NETSUITEERP'|'HUBSPOT'|'FACEBOOKADS'|'INSTAGRAMADS'|'ZOHOCRM'|'SALESFORCEPARDOT'|'SALESFORCEMARKETINGCLOUD'|'SLACK'|'STRIPE'|'INTERCOM'|'SNAPCHATADS',
     *     Description?: string,
     *     Capabilities?: Capabilities
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

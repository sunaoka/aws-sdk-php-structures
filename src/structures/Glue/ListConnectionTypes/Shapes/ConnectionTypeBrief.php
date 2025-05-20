<?php

namespace Sunaoka\Aws\Structures\Glue\ListConnectionTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JDBC'|'SFTP'|'MONGODB'|'KAFKA'|'NETWORK'|'MARKETPLACE'|'CUSTOM'|'SALESFORCE'|'VIEW_VALIDATION_REDSHIFT'|'VIEW_VALIDATION_ATHENA'|'GOOGLEADS'|'GOOGLESHEETS'|'GOOGLEANALYTICS4'|'SERVICENOW'|'MARKETO'|'SAPODATA'|'ZENDESK'|'JIRACLOUD'|'NETSUITEERP'|'HUBSPOT'|'FACEBOOKADS'|'INSTAGRAMADS'|'ZOHOCRM'|'SALESFORCEPARDOT'|'SALESFORCEMARKETINGCLOUD'|'SLACK'|'STRIPE'|'INTERCOM'|'SNAPCHATADS'|null $ConnectionType
 * @property string|null $DisplayName
 * @property string|null $Vendor
 * @property string|null $Description
 * @property list<string>|null $Categories
 * @property Capabilities|null $Capabilities
 * @property string|null $LogoUrl
 * @property list<ConnectionTypeVariant>|null $ConnectionTypeVariants
 */
class ConnectionTypeBrief extends Shape
{
    /**
     * @param array{
     *     ConnectionType?: 'JDBC'|'SFTP'|'MONGODB'|'KAFKA'|'NETWORK'|'MARKETPLACE'|'CUSTOM'|'SALESFORCE'|'VIEW_VALIDATION_REDSHIFT'|'VIEW_VALIDATION_ATHENA'|'GOOGLEADS'|'GOOGLESHEETS'|'GOOGLEANALYTICS4'|'SERVICENOW'|'MARKETO'|'SAPODATA'|'ZENDESK'|'JIRACLOUD'|'NETSUITEERP'|'HUBSPOT'|'FACEBOOKADS'|'INSTAGRAMADS'|'ZOHOCRM'|'SALESFORCEPARDOT'|'SALESFORCEMARKETINGCLOUD'|'SLACK'|'STRIPE'|'INTERCOM'|'SNAPCHATADS'|null,
     *     DisplayName?: string|null,
     *     Vendor?: string|null,
     *     Description?: string|null,
     *     Categories?: list<string>|null,
     *     Capabilities?: Capabilities|null,
     *     LogoUrl?: string|null,
     *     ConnectionTypeVariants?: list<ConnectionTypeVariant>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

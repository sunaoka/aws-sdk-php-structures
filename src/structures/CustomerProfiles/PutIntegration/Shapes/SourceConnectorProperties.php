<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MarketoSourceProperties $Marketo
 * @property S3SourceProperties $S3
 * @property SalesforceSourceProperties $Salesforce
 * @property ServiceNowSourceProperties $ServiceNow
 * @property ZendeskSourceProperties $Zendesk
 */
class SourceConnectorProperties extends Shape
{
    /**
     * @param array{
     *     Marketo?: MarketoSourceProperties,
     *     S3?: S3SourceProperties,
     *     Salesforce?: SalesforceSourceProperties,
     *     ServiceNow?: ServiceNowSourceProperties,
     *     Zendesk?: ZendeskSourceProperties
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

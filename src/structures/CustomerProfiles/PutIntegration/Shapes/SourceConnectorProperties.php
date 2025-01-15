<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MarketoSourceProperties|null $Marketo
 * @property S3SourceProperties|null $S3
 * @property SalesforceSourceProperties|null $Salesforce
 * @property ServiceNowSourceProperties|null $ServiceNow
 * @property ZendeskSourceProperties|null $Zendesk
 */
class SourceConnectorProperties extends Shape
{
    /**
     * @param array{
     *     Marketo?: MarketoSourceProperties|null,
     *     S3?: S3SourceProperties|null,
     *     Salesforce?: SalesforceSourceProperties|null,
     *     ServiceNow?: ServiceNowSourceProperties|null,
     *     Zendesk?: ZendeskSourceProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateIntegrationWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectorProfileName
 * @property 'Salesforce'|'Marketo'|'Zendesk'|'Servicenow'|'S3' $ConnectorType
 * @property IncrementalPullConfig|null $IncrementalPullConfig
 * @property SourceConnectorProperties $SourceConnectorProperties
 */
class SourceFlowConfig extends Shape
{
    /**
     * @param array{
     *     ConnectorProfileName?: string|null,
     *     ConnectorType: 'Salesforce'|'Marketo'|'Zendesk'|'Servicenow'|'S3',
     *     IncrementalPullConfig?: IncrementalPullConfig|null,
     *     SourceConnectorProperties: SourceConnectorProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

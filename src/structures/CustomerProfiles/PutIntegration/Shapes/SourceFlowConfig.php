<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectorProfileName
 * @property 'Salesforce'|'Marketo'|'Zendesk'|'Servicenow'|'S3' $ConnectorType
 * @property IncrementalPullConfig $IncrementalPullConfig
 * @property SourceConnectorProperties $SourceConnectorProperties
 */
class SourceFlowConfig extends Shape
{
    /**
     * @param array{
     *     ConnectorProfileName?: string,
     *     ConnectorType: 'Salesforce'|'Marketo'|'Zendesk'|'Servicenow'|'S3',
     *     IncrementalPullConfig?: IncrementalPullConfig,
     *     SourceConnectorProperties: SourceConnectorProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

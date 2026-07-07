<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ConnectorArnFilter>|null $connectorArns
 * @property list<StringFilter>|null $accounts
 * @property list<AwsConfigConnectorArnFilter>|null $awsConfigConnectorArns
 * @property list<ConnectorTypeFilter>|null $connectorType
 * @property list<ProviderFilter>|null $provider
 */
class ConnectorFilterCriteria extends Shape
{
    /**
     * @param array{
     *     connectorArns?: list<ConnectorArnFilter>|null,
     *     accounts?: list<StringFilter>|null,
     *     awsConfigConnectorArns?: list<AwsConfigConnectorArnFilter>|null,
     *     connectorType?: list<ConnectorTypeFilter>|null,
     *     provider?: list<ProviderFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

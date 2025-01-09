<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SalesforceGenie'|'Snowflake' $DataSourceName
 * @property 'ENABLED'|'DISABLED' $Status
 * @property string $SecretArn
 */
class IdentityProviderOAuthSetting extends Shape
{
    /**
     * @param array{
     *     DataSourceName?: 'SalesforceGenie'|'Snowflake',
     *     Status?: 'ENABLED'|'DISABLED',
     *     SecretArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

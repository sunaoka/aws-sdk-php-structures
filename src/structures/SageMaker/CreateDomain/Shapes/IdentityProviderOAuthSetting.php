<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SalesforceGenie'|'Snowflake'|null $DataSourceName
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property string|null $SecretArn
 */
class IdentityProviderOAuthSetting extends Shape
{
    /**
     * @param array{
     *     DataSourceName?: 'SalesforceGenie'|'Snowflake'|null,
     *     Status?: 'ENABLED'|'DISABLED'|null,
     *     SecretArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

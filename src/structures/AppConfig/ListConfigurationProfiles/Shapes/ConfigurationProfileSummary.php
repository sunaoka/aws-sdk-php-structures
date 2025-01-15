<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListConfigurationProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationId
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $LocationUri
 * @property list<'JSON_SCHEMA'|'LAMBDA'>|null $ValidatorTypes
 * @property string|null $Type
 */
class ConfigurationProfileSummary extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string|null,
     *     Id?: string|null,
     *     Name?: string|null,
     *     LocationUri?: string|null,
     *     ValidatorTypes?: list<'JSON_SCHEMA'|'LAMBDA'>|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

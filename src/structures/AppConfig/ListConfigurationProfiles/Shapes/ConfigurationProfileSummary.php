<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListConfigurationProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $Id
 * @property string $Name
 * @property string $LocationUri
 * @property list<'JSON_SCHEMA'|'LAMBDA'> $ValidatorTypes
 * @property string $Type
 */
class ConfigurationProfileSummary extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string,
     *     Id?: string,
     *     Name?: string,
     *     LocationUri?: string,
     *     ValidatorTypes?: list<'JSON_SCHEMA'|'LAMBDA'>,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

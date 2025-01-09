<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdateElasticsearchDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property bool $InternalUserDatabaseEnabled
 * @property SAMLOptionsOutput $SAMLOptions
 * @property \Aws\Api\DateTimeResult $AnonymousAuthDisableDate
 * @property bool $AnonymousAuthEnabled
 */
class AdvancedSecurityOptions extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     InternalUserDatabaseEnabled?: bool,
     *     SAMLOptions?: SAMLOptionsOutput,
     *     AnonymousAuthDisableDate?: \Aws\Api\DateTimeResult,
     *     AnonymousAuthEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

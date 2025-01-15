<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property bool|null $InternalUserDatabaseEnabled
 * @property SAMLOptionsOutput|null $SAMLOptions
 * @property \Aws\Api\DateTimeResult|null $AnonymousAuthDisableDate
 * @property bool|null $AnonymousAuthEnabled
 */
class AdvancedSecurityOptions extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     InternalUserDatabaseEnabled?: bool|null,
     *     SAMLOptions?: SAMLOptionsOutput|null,
     *     AnonymousAuthDisableDate?: \Aws\Api\DateTimeResult|null,
     *     AnonymousAuthEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

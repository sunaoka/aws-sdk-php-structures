<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CreateElasticsearchDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property SAMLIdp $Idp
 * @property string $SubjectKey
 * @property string $RolesKey
 * @property int $SessionTimeoutMinutes
 */
class SAMLOptionsOutput extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     Idp?: SAMLIdp,
     *     SubjectKey?: string,
     *     RolesKey?: string,
     *     SessionTimeoutMinutes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

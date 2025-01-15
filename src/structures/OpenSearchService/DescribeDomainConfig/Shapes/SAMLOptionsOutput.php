<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property SAMLIdp|null $Idp
 * @property string|null $SubjectKey
 * @property string|null $RolesKey
 * @property int|null $SessionTimeoutMinutes
 */
class SAMLOptionsOutput extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     Idp?: SAMLIdp|null,
     *     SubjectKey?: string|null,
     *     RolesKey?: string|null,
     *     SessionTimeoutMinutes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

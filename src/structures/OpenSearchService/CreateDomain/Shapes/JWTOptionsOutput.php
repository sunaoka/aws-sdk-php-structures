<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property string|null $SubjectKey
 * @property string|null $RolesKey
 * @property string|null $PublicKey
 */
class JWTOptionsOutput extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     SubjectKey?: string|null,
     *     RolesKey?: string|null,
     *     PublicKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

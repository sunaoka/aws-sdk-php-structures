<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string $SubjectKey
 * @property string $RolesKey
 * @property string $PublicKey
 */
class JWTOptionsInput extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     SubjectKey?: string,
     *     RolesKey?: string,
     *     PublicKey?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

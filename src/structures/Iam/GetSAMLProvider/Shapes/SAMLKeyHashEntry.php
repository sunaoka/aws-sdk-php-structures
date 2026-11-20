<?php

namespace Sunaoka\Aws\Structures\Iam\GetSAMLProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IssuerURL
 * @property list<string>|null $KeyHashes
 */
class SAMLKeyHashEntry extends Shape
{
    /**
     * @param array{
     *     IssuerURL?: string|null,
     *     KeyHashes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

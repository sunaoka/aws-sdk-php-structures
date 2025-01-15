<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $keyPolicies
 * @property list<KmsGrantConfiguration>|null $grants
 */
class KmsKeyConfiguration extends Shape
{
    /**
     * @param array{
     *     keyPolicies?: array<string, string>|null,
     *     grants?: list<KmsGrantConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

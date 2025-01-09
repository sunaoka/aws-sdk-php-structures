<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $keyPolicies
 * @property list<KmsGrantConfiguration> $grants
 */
class KmsKeyConfiguration extends Shape
{
    /**
     * @param array{
     *     keyPolicies?: array<string, string>,
     *     grants?: list<KmsGrantConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

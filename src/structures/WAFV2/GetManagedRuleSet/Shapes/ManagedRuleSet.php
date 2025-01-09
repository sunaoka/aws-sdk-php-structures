<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetManagedRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Id
 * @property string $ARN
 * @property string $Description
 * @property array<string, ManagedRuleSetVersion> $PublishedVersions
 * @property string $RecommendedVersion
 * @property string $LabelNamespace
 */
class ManagedRuleSet extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Id: string,
     *     ARN: string,
     *     Description?: string,
     *     PublishedVersions?: array<string, ManagedRuleSetVersion>,
     *     RecommendedVersion?: string,
     *     LabelNamespace?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetManagedRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Id
 * @property string $ARN
 * @property string|null $Description
 * @property array<string, ManagedRuleSetVersion>|null $PublishedVersions
 * @property string|null $RecommendedVersion
 * @property string|null $LabelNamespace
 */
class ManagedRuleSet extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Id: string,
     *     ARN: string,
     *     Description?: string|null,
     *     PublishedVersions?: array<string, ManagedRuleSetVersion>|null,
     *     RecommendedVersion?: string|null,
     *     LabelNamespace?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

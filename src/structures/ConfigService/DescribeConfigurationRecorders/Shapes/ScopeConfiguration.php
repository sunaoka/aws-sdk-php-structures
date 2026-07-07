<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationRecorders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scopeType
 * @property list<string>|null $scopeValues
 * @property bool $allRegions
 * @property list<string>|null $includedRegions
 */
class ScopeConfiguration extends Shape
{
    /**
     * @param array{
     *     scopeType: string,
     *     scopeValues?: list<string>|null,
     *     allRegions: bool,
     *     includedRegions?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

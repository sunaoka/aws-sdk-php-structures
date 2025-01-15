<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConfigRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ComplianceResourceTypes
 * @property string|null $TagKey
 * @property string|null $TagValue
 * @property string|null $ComplianceResourceId
 */
class Scope extends Shape
{
    /**
     * @param array{
     *     ComplianceResourceTypes?: list<string>|null,
     *     TagKey?: string|null,
     *     TagValue?: string|null,
     *     ComplianceResourceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

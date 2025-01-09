<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConfigRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ComplianceResourceTypes
 * @property string $TagKey
 * @property string $TagValue
 * @property string $ComplianceResourceId
 */
class Scope extends Shape
{
    /**
     * @param array{
     *     ComplianceResourceTypes?: list<string>,
     *     TagKey?: string,
     *     TagValue?: string,
     *     ComplianceResourceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

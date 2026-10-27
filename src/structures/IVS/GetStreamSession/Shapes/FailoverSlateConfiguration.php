<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string|null $name
 * @property int<3, 5>|null $activationThresholdSeconds
 * @property int<3, 10>|null $minSlateDisplaySeconds
 * @property int<60, 180>|null $maxSlateDisplaySeconds
 * @property 'CREATING'|'CREATE_FAILED'|'CREATED'|'UPDATING' $state
 * @property array<string, string>|null $tags
 */
class FailoverSlateConfiguration extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null,
     *     activationThresholdSeconds?: int<3, 5>|null,
     *     minSlateDisplaySeconds?: int<3, 10>|null,
     *     maxSlateDisplaySeconds?: int<60, 180>|null,
     *     state: 'CREATING'|'CREATE_FAILED'|'CREATED'|'UPDATING',
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

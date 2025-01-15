<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutManagedInsightRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TemplateName
 * @property string $ResourceARN
 * @property list<Tag>|null $Tags
 */
class ManagedRule extends Shape
{
    /**
     * @param array{
     *     TemplateName: string,
     *     ResourceARN: string,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

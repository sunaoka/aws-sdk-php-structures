<?php

namespace Sunaoka\Aws\Structures\HealthLake\UpdateProfileWithAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Body
 * @property 'INITIAL_GREETING'|'normal'|'confirmation'|'complete'|'error'|'options'|'choices' $Type
 * @property list<string>|null $OptionsList
 */
class AgentOutputMessage extends Shape
{
    /**
     * @param array{
     *     Body: string,
     *     Type: 'INITIAL_GREETING'|'normal'|'confirmation'|'complete'|'error'|'options'|'choices',
     *     OptionsList?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

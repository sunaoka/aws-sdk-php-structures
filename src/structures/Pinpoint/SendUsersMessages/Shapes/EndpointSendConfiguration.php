<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BodyOverride
 * @property array<string, string>|null $Context
 * @property string|null $RawContent
 * @property array<string, list<string>>|null $Substitutions
 * @property string|null $TitleOverride
 */
class EndpointSendConfiguration extends Shape
{
    /**
     * @param array{
     *     BodyOverride?: string|null,
     *     Context?: array<string, string>|null,
     *     RawContent?: string|null,
     *     Substitutions?: array<string, list<string>>|null,
     *     TitleOverride?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
